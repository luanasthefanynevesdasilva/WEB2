<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
   

    public function create(){
        return view('produto.create');
    }

    public function store(Request $request){
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->descriçao = $request->descriçao;
         $produto->desconto = $request->desconto;
         $produto->valor = $request->valor;
        $produto->save();
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
