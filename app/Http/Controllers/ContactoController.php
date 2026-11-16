<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactoRequest;
use App\Mail\ContactoAdminMail;
use App\Mail\ContactoClienteMail;
use App\Models\Contacto;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store(StoreContactoRequest $request): JsonResponse
    {
        $datos = array_merge(
            ['telefono' => null, 'empresa' => null],
            $request->validated(),
        );

        $contacto = Contacto::create($datos);

        Mail::to($datos['correo'])
            ->send(new ContactoClienteMail($datos));

        Mail::to(config('contact.admin_email'))
            ->send(new ContactoAdminMail($datos));

        return response()->json([
            'success' => true,
            'message' => 'Mensaje enviado correctamente. Pronto me pondré en contacto contigo.',
            'id' => $contacto->id,
        ]);
    }
}
