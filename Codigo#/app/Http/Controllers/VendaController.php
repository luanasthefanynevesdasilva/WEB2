<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVendaRequest;
use App\Models\Cliente;
use App\Models\ItemVenda;
use App\Models\Produto;
use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{

    public function index() {
        return view('vendas.index', ['vendas' => Venda::all()]);
    }

    public function create() {
        return view('vendas.create', [
            'produtos' => Produto::all(), 
            'clientes' => Cliente::all()
        ]);
    }

    public function store(StoreVendaRequest $request) {
        Venda::create($request->all());
        return redirect()->route('vendas.index');
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



    public function destroy($id) {
        Venda::findOrFail($id)->delete();
        return redirect()->route('vendas.index');
    }
}
