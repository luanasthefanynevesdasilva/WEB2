<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itensentrada;

class ItensentradaController extends Controller
{
    public function create($id){
        return view('itensentrada.create', ['idproduto'=>$id]) ('itensentrada.create', ['idvenda'=>$id]);
    }

    public function store(Request $request){
        $itensentrada = new itensentrada();
        $itensentrada->precocompra = $request->precocompra;
        $itensentrada->idproduto = $request->idproduto;
        $itensentrada->identrada = $request->identrada;
        $itensentrada->save();
        return view('entrada.show');

    }
}
