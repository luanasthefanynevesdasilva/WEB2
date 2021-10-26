<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{

    public function index()
    {
        $fornecedores = Fornecedor::all();

        return view('fornecedores.index', ['fornecedores' => $fornecedores]);
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = $request->nome;
        $fornecedor->cnpj = $request->cnpj;
        $fornecedor->telefone = $request->telefone;
        $fornecedor->endereco = $request->endereco;
        $fornecedor->save();

        return redirect('fornecedores/');
    }
}
