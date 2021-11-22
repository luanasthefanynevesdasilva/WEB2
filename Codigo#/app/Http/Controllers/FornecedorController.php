<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFornecedorRequest;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        return view('fornecedores.index', ['fornecedores' => Fornecedor::all()]);
    }

    public function create() {
        return view('fornecedores.create');
    }

    public function store(StoreFornecedorRequest $request) {
        Fornecedor::create($request->all());
        return redirect()->route('fornecedores.index');
    }

    public function show($id){
        if($id){
            $fornecedor = fornecedor::where('id',$id)->get();
        }
        else{
            $fornecedor = fornecedor::all();
        }
        return view('fornecedor.show', ['fornecedor'=>$fornecedor]);
    }


    public function destroy($id) {
        Fornecedor::findOrFail($id)->delete();
        return redirect()->route('fornecedores.index');
    }
}
