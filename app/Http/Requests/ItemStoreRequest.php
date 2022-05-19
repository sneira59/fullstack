<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
            return [
                'n' => "required",
                'vu' => "numeric|digits_between:3,12",
                'a' => "required",
            ];
    }
    public function messages()
    {
        return [
            'n.required' => "El campo no puede estar vacío",
            'vu.numeric' => "Solo Numeros",
            'vu.digits_between' => "Precio Invalido",
            'a.required' => "El campo no puede estar vacío",









        ];
    }
}
