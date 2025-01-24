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
           'fecha_ingreso' => "required|date",
           'name_pd' => "required|min:3|max:50|",
            'Descripcion_pd' => "required|min:3|max:50|",
            'precio' => "required|decimal:2" ,
            'category_id' => "required|integer",
            'stock' => "required|integer",
            'image' => "required"
        ];
    }
}
