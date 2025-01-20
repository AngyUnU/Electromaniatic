<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
          'nom_empleado' => "required|min:3|max:50|",
            'apellido_empleado' => "required|min:3|max:50|",
            'puesto' => "required|min:3|max:50|",
            'tel' => "required|min:5|max:50|",
            'imagen' => "required|integer",

        ];
    }
}
