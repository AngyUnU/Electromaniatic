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
          'name_e' => "required|string|min:3|max:50",
            'surname_e' => "required|string||max:50",
            'position' => "required|string|min:3|max:50",
            'tel' => " |required|integer|max:10",
            'imagen' => "required|string",

        ];
    }
}
