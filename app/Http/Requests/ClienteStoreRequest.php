<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteStoreRequest extends FormRequest
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
                'name' => "required|alpha|min:3|max:15",
                'apellido' => "required|alpha|min:3|max:15",
                'telefono' => "numeric|digits_between:9,12",
                'identificacion' => "min:1|max:12",
            ];
    }
    public function messages()
    {
        return [
            'name.required' => "El campo no puede estar vacío",
            'name.max' => "No es permitido mas de 15 caracteres",
            'name.min' => "No es permitido menos de 3 caracteres",
            'name.alpha' => "Solo letras",
            'apellido.required' => "El campo no puede estar vacío",
            'apellido.max' => "No es permitido mas de 15 caracteres",
            'apellido.min' => "No es permitido menos de 3 caracteres",
            'apellido.alpha' => "Solo letras",
            'telefono.numeric' => "Solo Numeros",
            'telefono.digits_between' => "Telefono Invalido",
            'identificacion.min' => "No es permitido menos de 1 caracter",
            'identificacion.max' => "No es permitido mas de 12 caracteres",








        ];
    }
}
