<?php

namespace App\Channels;

use GuzzleHttp\Client as HttpClient;
use Illuminate\Notifications\Notification;
use App\Messages\TeamMessage;
use Illuminate\Support\Arr;

class TeamWebhookChannel
{
    /**
     * The HTTP client instance.
     *
     * @var \GuzzleHttp\Client
     */
    protected $http;

    /**
     * Create a new Team channel instance.
     *
     * @param  \GuzzleHttp\Client  $http
     * @return void
     */

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    /**
    * Send the given notification.
    *
    * @param mixed $notifiable
    * @param \Illuminate\Notifications\Notification $notification
    *
    * @throws \NotificationChannels\Webhook\Exceptions\CouldNotSendNotification
    */
   public function send($notifiable, Notification $notification)
   {
        if (! $url = $notifiable->routeNotificationFor('TeamWebhook')) {
            return;
        }

        $this->http->post($url, $this->buildJsonPayload(
            $notification->toTeamWebhook($notifiable)
        ));
    }

    public function buildJsonPayload(TeamMessage $message)
    {
        $headerData = array_filter([
            'summary' => data_get($message, 'summary'),
            'title' => data_get($message, 'title'),
            'themeColor' => data_get($message, 'themeColor'),
        ]);

        $sectionData = array_filter([

            'activityTitle' => data_get($message, 'activityTitle'),
            'activityImage' => data_get($message, 'activityImage'),
            'activityText' => data_get($message, 'activityText'),
        ]);

        return array_merge([
            'json' => array_merge(
                $headerData, ['sections' => [$sectionData]]
                )]);
    }
}