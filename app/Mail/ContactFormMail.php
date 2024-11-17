<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Los detalles del formulario de contacto.
     *
     * @var array
     */
    public $details;

    /**
     * Crea una nueva instancia del mensaje.
     *
     * @param array $details
     */
    public function __construct(array $details)
    {
        $this->details = $details;
    }

    /**
     * Construye el mensaje.
     */
    public function build()
    {
        return $this->subject('Nuevo mensaje de contacto')
                    ->view('emails.HomeContact') // Asegúrate de que esta vista exista
                    ->with('details', $this->details);
    }
}

