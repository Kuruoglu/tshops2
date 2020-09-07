<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $user = [];
    /**
     * Create a new message instance.
     * @param $user
     * @return void
     */
    public function __construct($user)
    {

        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     *
     */
    public function build()
    {

        return $this
            ->from('7395836@gmail.com')
            ->view('mails.register')
            ->with([
                'userName' => $this->user['name'],
                'userPassword' => $this->user['password'],
                'userEmail' => $this->user['email'],


                ])
            ->subject('Вы зарегестрировались');
    }
}
