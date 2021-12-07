<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompraRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fornecedor_id' => 'required',
            'produto_id' => 'required',
            'valortotal' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'fornecedor_id.required' => 'O campo fornecedor é obrigatório.',
            'produto_id.required' => 'O campo produto é obrigatório.',
            'valortotal.numeric' => 'O campo valortotal deve ser numérico.',
            'valortotal.required' => 'O campo valortotal é obrigatório.'
        ];
    }
}
