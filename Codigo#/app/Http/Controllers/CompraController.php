<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompraRequest;
use App\Models\Compra;
use App\Models\Fornecedor;
use App\Models\ItemCompra;
use App\Models\Produto;
use Illuminate\Http\Request;

class CompraController extends Controller
{

    public function index() {
        return view('compras.index', [
            'compras' => Compra::all()
        ]);
    }

    public function create() {
        return view('compras.create', [
            'produtos' => Produto::all(),
            'fornecedores' => Fornecedor::all()
        ]);
    }

    public function store(StoreCompraRequest $request) {
        Compra::create($request->all());
        return redirect()->route('compras.index');
    }

    public function show($id){
        if($id){
            $compra = Compra::where('id',$id)->get();
        }
        else{
            $compra = Compra::all();
        }
        return view('Compra.show', ['Compra'=>$compra]);
    }


    public function destroy($id) {
        Compra::findOrFail($id)->delete($id);
        return redirect()->route('compra.index');
    }
}
