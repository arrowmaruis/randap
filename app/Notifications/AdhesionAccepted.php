<?php
// app/Notifications/AdhesionAccepted.php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;

class AdhesionAccepted extends Notification
{
    use Queueable;

    protected $adhesionRequest;
    protected $token;

    public function __construct($adhesionRequest, $token)
    {
        $this->adhesionRequest = $adhesionRequest;
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $url = URL::temporarySignedRoute(
            'finalize.adhesion', 
            now()->addDays(2), 
            ['token' => $this->token]
        );

        return (new MailMessage)
                    ->subject('Votre demande d\'adhésion a été acceptée')
                    ->line('Votre demande d\'adhésion a été acceptée.')
                    ->action('Finaliser l\'adhésion', $url)
                    ->line('Ce lien expirera dans 2 jours.');
    }
}

