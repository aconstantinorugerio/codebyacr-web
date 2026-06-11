<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Modelos 
use App\Models\Contacto;
// emails 
use App\Mail\ContactoClienteMail;
use App\Mail\ContactoAdminMail;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
     public function store(Request $request)
    { 
        
    
        $request->validate([
            'nombre' => 'required|max:255',
            'correo' => 'required|email',
            'mensaje' => 'required|min:1'
        ]);

        $contacto = Contacto::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'empresa' => $request->empresa,
            'mensaje' => $request->mensaje,
        ]);
// Envio de correos 
$datos = $request->all();

Mail::to($request->correo)
    ->send(new ContactoClienteMail($datos));

Mail::to('contacto@codebyacr.com')
    ->send(new ContactoAdminMail($datos));


        return response()->json([
            'success' => true,
            'message' => 'Mensaje enviado correctamente. Pronto me pondre en contacto contigo',
            'id' => $contacto->id
        ]);
    }
}
