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
           'fecha_ingreso' => "required",
           'name_pd' => "required|min:3|max:50|",
            'Descripcion_pd' => "required|min:3|max:50|",
            'precio' => "double|min_digits:10",
            'category_id' => "required",
            'stock' => "required|integer",
            'image' => "required"
        ];
    }
}
