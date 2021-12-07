<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoredevolucaoRequest;
use App\Models\devolucao;
use Illuminate\Http\Request;

class devolucaoController extends Controller
{

    public function index() {
        return view('devolucao.index', ['devolucao' => devolucao::all()]);
    }

    public function create() {
        return view('devolucao.create');
    }

    public function store(Request $request){
        $devolucao = new devolucao();
        $devolucao->Total = $request->Total;
        $devolucao->Extra = $request->Extra;
        $devolucao->metodopagamento = $request->metodopagamento;
        $devolucao->datadevolucao = $request->datadevolucao;
        $devolucao->save();
    }
    public function show($id){
        if($id){
            $devolucao = devolucao::where('id',$id)->get();
        }
        else{
            $devolucao = devolucao::all();
        }
        return view('devolucao.show', ['devolucao'=>$devolucao]);
    }

    public function destroy($id) {
        Produto::find($id)->delete();
        return redirect()->route('devolucao.index');
    }
}
