<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{

    public function create(){
        return view('fornecedor.create');
    }

    public function store(Request $request){
        $fornecedor = new fornecedor();
        $fornecedor->nome = $request->nome;
        $fornecedor->email = $request->email;
        $fornecedor->save();
        return view('fornecedor.store');
    }
    

    public function edit($id){
        $fornecedor = fornecedor::find($id);
        return view('fornecedor.edit', ['fornecedor'=>$fornecedor]);
    }
}
