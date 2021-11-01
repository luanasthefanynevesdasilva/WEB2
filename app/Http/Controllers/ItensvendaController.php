<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itensvenda;

class ItensvendaController extends Controller
{
 
    public function create($id){
        return view('itensvenda.create', ['idproduto'=>$id]) ('itensvenda.create', ['idvenda'=>$id]);
    }

    public function store(Request $request){
        $itensvenda = new itensvenda();
        $itensvenda->valorvenda = $request->valorvenda;
        $itensvenda->idproduto = $request->idproduto;
        $itensvenda->idvenda = $request->idvenda;
        $itensvenda->save();

     }
}
