<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactoAdminMail extends Mailable
{
    public $datos;

    public function __construct($datos)
    {
        $this->datos = $datos;
    }

    public function build()
    {
        return $this
            ->subject('📑 Nuevo formulario de contacto')
            ->view('emails.contacto-admin');
    }
}