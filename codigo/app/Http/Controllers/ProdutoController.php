<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Fornecedor;


class ProdutoController extends Controller
{
    public function indexproduto(){
        $produtos = produto::all();

        return view('produto.indexproduto',['produto'=>$produtos]);
    }

    public function create(){
        return view('produto.create');
    }

    public function store(Request $request){
        $request->validate([
            'nome' => 'required|max:255',
            'desconto' => 'required|numeric|gt:0',
            'descriçao'=>'required|max:255',
            'valor' => 'required|numeric|gt:0',
        ]);

        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->descriçao = $request->descriçao;
        $produto->desconto = $request->desconto;
        $produto->valor = $request->valor;
        $produto->save();
        return redirect('/produto/indexproduto');

    }

    public function show($id){
        if($id){
            $produto = Produto::where('id',$id)->get();
        }
        else{
            $produto = Produto::all();
        }
        return view('produto.show', ['produto'=>$produto]);
    }

 
}
