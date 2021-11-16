<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Entrada;

class EntradaController extends Controller
{
    public function indexentrada(){
        $entrada = entrada::all();

        return view('entrada.indexentrada',['entrada'=>$entrada]);
    }
    public function show($id){
        $entrada = Entrada::find($id);

        if($entrada){
             $entrada;
        }

         $fornecedor = $entrada->fornecedor()->first();

        if($fornecedor){
            echo $fornecedor->nome;
        }
    }

    public function create($id){
        return view('entrada.create', ['idfornecedor'=>$id]);
    }

    public function store(Request $request){
        $request->validate([
            'valortotal' => 'required|numeric|gt:0',
        ]);
        $entrada = new entrada();
        $entrada->valortotal = $request->valortotal;
        $entrada->idfornecedor = $request->idfornecedor;
        $entrada->save();
        return redirect('/entrada/indexentrada');

    }
}
