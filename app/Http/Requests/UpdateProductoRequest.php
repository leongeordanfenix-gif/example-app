<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Cambiado a true
    }

    public function rules(): array
    {
        return [
            'nombre'      => 'sometimes|required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio'      => 'sometimes|required|numeric|min:0',
        ];
    }
}
