<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => ['required', 'string', 'max:255'],
            'correo' => ['required', 'string', 'email', 'max:255'],
            'telefono' => ['nullable', 'string', 'max:255'],
            'empresa' => ['nullable', 'string', 'max:255'],
            'mensaje' => ['required', 'string', 'min:1', 'max:5000'],
        ];
    }

    public function attributes(): array
    {
        return [
            'nombre' => 'nombre',
            'correo' => 'correo electrónico',
            'telefono' => 'teléfono',
            'empresa' => 'empresa',
            'mensaje' => 'mensaje',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'El campo :attribute es obligatorio.',
            'string' => 'El campo :attribute debe ser texto.',
            'email' => 'Introduce un correo electrónico válido.',
            'max' => 'El campo :attribute no puede superar :max caracteres.',
            'min' => 'El campo :attribute debe contener al menos :min carácter.',
        ];
    }
}
