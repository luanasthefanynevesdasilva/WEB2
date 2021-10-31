<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Entrada;

class EntradaController extends Controller
{
    public function create($id){
        return view('entrada.create', ['idfornecedor'=>$id]);
    }

    public function store(Request $request){
        $entrada = new entrada();
        $entrada->valortotal = $request->valortotal;
        $entrada->idfornecedor = $request->idfornecedor;
        $entrada->save();
        return redirect('fornecedorshow');

    }
}
