<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

Use App\User;

class UserRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $created_at;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->name = $user->name;
        $this->email = $user->email;
        $this->created_at = $user->created_at;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this
            ->from(env('SES_VALID_EMAIL'))
            ->subject('New user registered on m2xc')
            ->markdown('email.userregistered');
    }
}
