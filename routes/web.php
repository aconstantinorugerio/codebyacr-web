<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('pages.home');
});
Route::post('/contacto', [ContactoController::class, 'store'])
    ->name('contacto.store');

Route::get('/test-mail', function () {

    try {

        Mail::raw('Prueba SMTP Titan', function ($message) {

            $message->to('aconstantino@codebyacr.com')
                    ->subject('Prueba SMTP');

        });

        return 'Correo enviado';

    } catch (\Exception $e) {

        return $e->getMessage();

    }

});