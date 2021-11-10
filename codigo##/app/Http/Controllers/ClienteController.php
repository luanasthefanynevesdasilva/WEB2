<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
 
    public function indexcliente(){
        $clientes = Cliente::all();

        return view('clientes.indexcliente',['clientes'=>$clientes]);
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->debito = $request->debito;
        $cliente->endereco = $request->endereco;
        $cliente->save();
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

 
 
    }

