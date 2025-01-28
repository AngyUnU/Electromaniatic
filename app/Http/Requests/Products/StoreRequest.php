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
           'entry_date' => "required|date",
           'name_pd' => "required|string|min:3|max:50|",
            'description_pd' => "required|string|min:3|max:50|",
            'price' => "required|decimal:2" ,
            'categorie'=>"required|string",
            'stock' => "required|integer",
            'image' => "required|filled"
        ];
    }
}
