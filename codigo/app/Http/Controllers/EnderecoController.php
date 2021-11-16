<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Endereco;

class EnderecoController extends Controller
{
    public function indexendereco(){
        $endereco = endereco::all();

        return view('endereco.indexendereco',['endereco'=>$endereco]);
    }
    public function show($id){
        $endereco = Endereco::find($id);

        if($endereco){
            $endereco ;
        }

 
        $cliente = $endereco->cliente()->first();

        if($cliente){
            echo $cliente->nome;
        }
    }

    public function create($id){
        return view('endereco.create', ['idcliente'=>$id]);
    }

    public function store(Request $request){
        $request->validate([
            'logradouro' => 'required|max:255',
            'bairro' => 'required|max:255',
            'cidade' => 'required|max:255',
            'uf' => 'required|max:2',
        ]);

        $endereco = new endereco();
        $endereco->logradouro = $request->logradouro;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->uf = $request->uf;
        $endereco->idcliente = $request->idcliente;
        $endereco->save();
        return redirect('/endereco/indexendereco');

    }
    
}
