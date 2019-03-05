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
            
            ->summary('New User registered')
            ->title('A new user has registered on the M2xc website.')
            ->info()
            ->activityTitle('New User Details:')
            ->activityText('User name: '. $notifiable->name . '<br>Email Address is: ' . $notifiable->email . '<br>Created on: ' . $notifiable->created_at . ' UTC.<br>To admit this user, go to <a href="http://m2xc.com/admin/user" target=\'_blank\'>M2xc.com</a>.<br>If you do not recognize this user, you can choose to do nothing and the system will delete the record in 7 days.')
            ->activityImage('https://www.iconexperience.com/_img/v_collection_png/256x256/shadow/user_generic_green.png');

            
    }
}
