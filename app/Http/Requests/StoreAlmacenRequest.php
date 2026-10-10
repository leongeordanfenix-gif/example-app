<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlmacenRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Cambiado a true
    }

    public function rules(): array
    {
        return [
            'nombre_almacen' => 'required|string|max:255',
            'tamaño'         => 'nullable|string|max:255',
            'estado'         => 'boolean',
        ];
    }
}
