<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function indexfornecedor(){
        $fornecedor = Fornecedor::all();

        return view('fornecedor.indexfornecedor',['fornecedor'=>$fornecedor]);
    }

    public function create(){
        return view('fornecedor.create');
    }

    public function store(Request $request){
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
        ]);

        $fornecedor = new fornecedor();
        $fornecedor->nome = $request->nome;
        $fornecedor->email = $request->email;
        $fornecedor->save();
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

    public function edit($id){
        $fornecedor = fornecedor::find($id);
        return view('fornecedor.edit', ['fornecedor'=>$fornecedor]);
    }

    public function update(Request $request){
        fornecedor::find($request->id)->update($request->except('_method'));
        return redirect('indexfornecedor')->with('msg', 'Cadastro realizado com sucesso');
    }

    public function destroy($id){
        fornecedor::findOrFail($id)->delete();
        return redirect('indexfornecedor')->with('msg', ' apagado');
    }
}