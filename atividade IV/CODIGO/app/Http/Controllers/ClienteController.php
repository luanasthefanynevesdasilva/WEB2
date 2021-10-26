<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();

        return view('clientes.index', ['clientes' => $clientes]);
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->endereco = $request->endereco;
        $cliente->debito = $request->debito;
        $cliente->save();

        return redirect('clientes/');
    }

    public function show($id)
    {
        if($id){
            $cliente = Cliente::findOrFail($id);

            return view('clientes.show', ['cliente' => $cliente]);
        } else {
            return redirect('clientes/');
        }
    }
}
