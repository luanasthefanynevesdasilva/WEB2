<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itensentrada;

class ItensentradaController extends Controller
{
    public function create(){
        return view('itensentrada.create');
    }
    public function show($id){
        $itensentrada = Itensentrada::find($id);

        if($itensentrada){
             $itensentrada ;
        }

         $produto = $itensentrada->produto()->first();

        if($produto){
            echo $produto->descriçao;
        }
         $entrada = $itensentrada->entrada()->first();

        if($entrada){
            echo $entrada->id;
        }
    }

    public function store(Request $request){
        $itensentrada = new itensentrada();
        $itensentrada->precocompra = $request->precocompra;
         $itensentrada->idproduto = $request->idproduto;
        $itensentrada->identrada = $request->identrada;
        $itensentrada->save();

     }
}
