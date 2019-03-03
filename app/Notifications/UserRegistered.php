<?php

namespace App\Notifications;
use App\Messages\TeamMessage;
use App\Channels\TeamWebhookChannel;
use Illuminate\Support\Facades\Log;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserRegistered extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // return ['mail'];
        return [TeamWebhookChannel::class];
        
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

        /**
     * Get the Microsoft Teams representation of the notification.
     * @param  mixed  $notifiable
     */
    public function toTeamWebhook($notifiable)
    {
        $message = new TeamMessage();
        // Log::error($notifiable);
        return $message
            ->summary('A user has registered')
            ->title('The user is:'.$notifiable->name)
            ->error()
            // ->sectionTitle('Title of Section')
            // ->sectionText('Text of Section')
            ->activityTitle('Some Activity')
            ->activityText('Text describing the activity');
            // ->activityImage('https://www.iconexperience.com/_img/v_collection_png/256x256/shadow/astronaut.png');

            
    }
}
