<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactoClienteMail extends Mailable
{
    public $datos;

    public function __construct($datos)
    {
        $this->datos = $datos;
    }

    public function build()
    {
        return $this
            ->subject('📑 Gracias por contactar a CodeByACR')
            ->view('emails.contacto-cliente');
    }
}