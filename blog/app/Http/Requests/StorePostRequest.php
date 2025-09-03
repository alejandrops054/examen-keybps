<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'titulo' => ['required', 'string', 'max:60'],
            'contenido' => ['required', 'string', 'max:255'],
            'categorias' => ['sometimes', 'array'],
            'categorias.*' => ['exists:categories,id'],
        ];
    }
}
