<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendaController extends Controller
{
    public function create($id){
        return view('venda.create', ['idcliente'=>$id]);
    }

    public function store(Request $request){
        $venda = new Venda();
        $venda->valor = $request->valor;
        $venda->idcliente = $request->idcliente;
        $venda->save();
        return redirect('clienteshow');
    }

    public function show($id){
        if($id){
            $venda = venda::where('id',$id)->get();
        }
        else{
            $venda = venda::all();
        }
        return view('venda.show', ['venda'=>$venda]);
    }

}


