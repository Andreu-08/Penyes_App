<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminToUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $viewTemplate;

    /**
     * Crea una nueva instancia del mensaje.
     *
     * @param array $details
     * @param string $viewTemplate
     */
    public function __construct(array $details, $viewTemplate = 'emails')
    {
        $this->details = $details;
        $this->viewTemplate = $viewTemplate;
    }

    /**
     * Construye el mensaje.
     */
    public function build()
    {
        return $this->subject($this->details['subject'])
                    ->view($this->viewTemplate)
                    ->with('details', $this->details);
    }
}