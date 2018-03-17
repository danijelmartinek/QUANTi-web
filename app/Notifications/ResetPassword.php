<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Reset Lozinke')
            ->from('info@quanti.com.hr')
            ->greeting('Poštovanje')
            ->salutation('Lijep pozdrav, QUANTi')
            ->line('Dobili ste ovaj mail jer nam je poslan zahtjev za resetiranje lozinke.')
            ->action('Reset Lozinke', url('password/reset', $this->token))
            ->line('Ako niste poslali ovaj zahtjev, ignorirajte mail.');
    }
}
