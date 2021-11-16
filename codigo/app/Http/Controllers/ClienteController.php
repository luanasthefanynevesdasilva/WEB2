<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\StoreCliente;



class ClienteController extends Controller
{
 
    public function indexcliente(){
        $clientes = Cliente::all();

        return view('clientes.indexcliente',['clientes'=>$clientes]);
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'debito' => 'required|numeric|gt:0',
            'endereco' => 'required|max:255',

        ]);

        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->debito = $request->debito;
        $cliente->endereco = $request->endereco;
        $cliente->save();
        return redirect('/clientes/indexcliente');
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

    public function edit($id){
        $cliente = Cliente::find($id);
        return view('clientes.edit', ['cliente'=>$cliente]);
    }

    public function update(Request $request){
        Cliente::find($request->id)->update($request->except('_method'));
        return redirect('clientes/indexcliente')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        Cliente::findOrFail($id)->delete();
        return redirect('indexcliente')->with('msg', 'Cadastro apagado');
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

