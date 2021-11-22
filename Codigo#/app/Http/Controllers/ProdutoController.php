<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdutoRequest;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function index() {
        return view('produtos.index', ['produtos' => Produto::all()]);
    }

    public function create() {
        return view('produtos.create');
    }

    public function store(StoreProdutoRequest $request) {
        Produto::create($request->all());
        return redirect()->route('produtos.index');
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
    


    public function destroy($id) {
        Produto::find($id)->delete();
        return redirect()->route('produtos.index');
    }
}
