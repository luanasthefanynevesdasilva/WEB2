<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|max:200',
            'valor' => 'required|numeric',
            'desconto' => 'required|numeric'

        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome do produto é obrigatório.',
            'nome.max' => 'O nome do produto deve ter no máximo :max caracteres.',
            'valor.required' => 'O valor do produto é obrigatório.',
            'valor.numeric' => 'O valor do produto deve ser um número.',
            'desconto.required' => 'O desconto do produto é obrigatório.',
            'desconto.numeric' => 'O desconto do produto deve ser um número.'
        ];
    }
}
