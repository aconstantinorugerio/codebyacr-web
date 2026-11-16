<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::post('/contacto', [ContactoController::class, 'store'])
    ->name('contacto.store');
