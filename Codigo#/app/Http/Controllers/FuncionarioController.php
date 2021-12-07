<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFuncionarioRequest;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index() {
        return view('Funcionario.index', ['Funcionario' => Funcionario::all()]);
    }

    public function create() {
        return view('Funcionario.create');
    }

    public function store(StoreFuncionarioRequest $request) {
        Funcionario::create($request->all());
        return redirect()->route('Funcionario.index');
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
