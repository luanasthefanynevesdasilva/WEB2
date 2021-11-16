<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendaController extends Controller
{
    public function indexvenda(){
        $venda = venda::all();

        return view('venda.indexvenda',['venda'=>$venda]);
    }
    public function show($id){
        $venda = Venda::find($id);

        if($venda){
           $venda ;
        }

         $cliente = $venda->cliente()->first();

        if($cliente){
            echo $cliente->nome;
        }
    }

    public function create($id){
        return view('venda.create', ['idcliente'=>$id]);
    }

    public function store(Request $request){
        $request->validate([
            'valor' => 'required|numeric|gt:0',
        ]);

        $venda = new Venda();
        $venda->valor = $request->valor;
        $venda->idcliente = $request->idcliente;
        $venda->save();
        return redirect('/venda/indexvenda');


     }
}
