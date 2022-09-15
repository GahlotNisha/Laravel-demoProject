<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendRegisteredUserMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->data = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.registration-reminder')
            ->subject('Todays Registered User List')
            ->from(env("MAIL_FROM_ADDRESS") ? 'saurabh.dave@fooddudesdelivery.com' : 'jjain@fooddudesdelivery.com', 'fooddudesdelivery')->with([
                'data' => $this->data,
            ]);
    }
}
