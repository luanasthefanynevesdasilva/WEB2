<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|max:200',
            'endereco' => 'required|max:200',
            'debito' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'endereco.required' => 'O campo endereço é obrigatório.',
            'debito.required' => 'O campo endereço é obrigatório.',
            'debito.numeric' =>'o campo debito deve se numerico'

        ];
    }
}
