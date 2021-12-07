<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVeiculoRequest;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{

    public function index() {
        return view('Veiculo.index', ['Veiculo' => Veiculo::all()]);
    }

    public function create() {
        return view('Veiculo.create');
    }

    public function store(Request $request){
        $veiculo = new veiculo();
        $veiculo->cor = $request->cor;
        $veiculo->ano = $request->ano;
        $veiculo->Placa = $request->Placa;
        $veiculo->modelo = $request->modelo;
        $veiculo->nome = $request->nome;
        $veiculo->Status = $request->Status;
        $veiculo->seguro = $request->seguro;
        $veiculo->save();
    }
    public function show($id){
        if($id){
            $Veiculo = Veiculo::where('id',$id)->get();
        }
        else{
            $Veiculo = Veiculo::all();
        }
        return view('Veiculo.show', ['Veiculo'=>$Veiculo]);
    }

    public function destroy($id) {
        Produto::find($id)->delete();
        return redirect()->route('Veiculo.index');
    }
}
