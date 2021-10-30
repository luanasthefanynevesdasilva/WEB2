<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();

        return view('produtos.index',['produtos'=>$produtos]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->valordecompra = $request->valordecompra;
        $produto->valordevenda = $request->valordevenda;
        $produto->quantidade = $request->quantidade;
        $produto->save();
    }

    public function show($id){
        if($id){
            $produto = Produto::where('id',$id)->get();
        }
        else{
            $produto = Produto::all();
        }
        return view('produtos.show', ['produtos'=>$produto]);
    }


}
