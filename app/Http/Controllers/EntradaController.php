<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Entrada;

class EntradaController extends Controller
{
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
        $entrada = new entrada();
        $entrada->valortotal = $request->valortotal;
        $entrada->idfornecedor = $request->idfornecedor;
        $entrada->save();

        return redirect()->route('fornecedorshow', ['id' => 5]);
    }
}
