<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index() {
        return view('clientes.index', ['clientes' => Cliente::all()]);
    }

    public function create() {
        return view('clientes.create');
    }

    public function store(StoreClienteRequest $request) {
        Cliente::create($request->all());
        return redirect()->route('clientes.index');
    }

    public function show($id){
        if($id){
            $cliente = Cliente::where('id',$id)->get();
        }
        else{
            $cliente = Cliente::all();
        }
        return view('clientes.show', ['cliente'=>$cliente]);
    }

    public function edit($id) {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    public function update(StoreClienteRequest $request, $id) {
        Cliente::findOrFail($id)->update($request->all());
        return redirect()->route('clientes.index');
    }

    public function destroy($id) {
        Cliente::findOrFail($id)->delete();
        return redirect()->route('clientes.index');
    }
    public function showendereco(){
        $clientes = Cliente::all();

        foreach($clientes as $cliente){
            echo "<p>Cliente: $cliente->nome </p>";
            echo "<p>Debito: $cliente->debito </p>";

            $enderecos = $cliente->endereco()->get();

            if(count($enderecos)>0){
                echo "<h1>Endereço</h1>";
                foreach($enderecos as $endereco){
                    echo "<p>[$endereco->id , $endereco->logradouro]</p>";
                }
            }
            echo"<br>";
        }
    }
}
