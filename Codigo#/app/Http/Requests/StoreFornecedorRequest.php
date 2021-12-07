<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFornecedorRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|max:255|string',
            'email' => 'required|max:100'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.max' => 'O campo nome deve ter no máximo :max caracteres.',
            'nome.string' => 'O campo nome deve conter numeros.',
            'email.required' => 'O campo endereço é obrigatório.',
            'email.max' => 'O campo endereço deve ter no máximo :max caracteres.'
        ];
    }
}
