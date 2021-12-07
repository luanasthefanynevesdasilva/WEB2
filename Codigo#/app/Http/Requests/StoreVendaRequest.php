<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVendaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cliente_id' => 'required',
            'produto_id' => 'required',
            'valortotal' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'cliente_id.required' => 'O campo cliente é obrigatório.',
            'produto_id.required' => 'O campo produto é obrigatório.',
            'valortotal.required' => 'O campo valortotal é obrigatório.',
            'valortotal.numeric' => 'O campo valortotal é numerico.'

        ];
    }
}
