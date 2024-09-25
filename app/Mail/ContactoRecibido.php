<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Support\Facades\Lang;

class ContactoRecibido extends Mailable
{
    use Queueable, SerializesModels;
    private $contacto;

    public function __construct($contacto)
    {
        $this->contacto = $contacto;
    }

    public function envelope()
    {
        return new Envelope(
            from: new Address('progra4-2024@umes.incodemode.com', 'Formulario de Contacto'),
            to: [new Address($this->contacto['email'], $this->contacto['nombre'])],
            replyTo: [new Address('santiagogares51@gmail.com', 'Santiago')],
            subject: __('mail.contact_received_subject'),
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.contactado',
            with: [
                'nombre' => $this->contacto['nombre'],
                'cuerpo' => $this->contacto['mensaje'],
                'despedida' => __('mail.farewell'),
                'firma' => __('mail.signature', ['app_name' => config('app.name')]),
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
