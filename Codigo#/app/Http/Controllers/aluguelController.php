<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorealuguelRequest;
use App\Models\aluguel;
use Illuminate\Http\Request;

class aluguelController extends Controller
{
    public function index() {
        return view('aluguel.index', ['aluguel' => aluguel::all()]);
    }

    public function create() {
        return view('aluguel.create');
    }

    public function store(StorealuguelRequest $request) {
        aluguel::create($request->all());
        return redirect()->route('aluguel.index');
    }

    public function show($id){
        if($id){
            $aluguel = aluguel::where('id',$id)->get();
        }
        else{
            $aluguel = aluguel::all();
        }
        return view('aluguel.show', ['aluguel'=>$aluguel]);
    }

    public function edit($id) {
        $aluguel = aluguel::findOrFail($id);
        return view('aluguel.edit', ['aluguel' => $aluguel]);
    }

    public function update(StorealuguelRequest $request, $id) {
        aluguel::findOrFail($id)->update($request->all());
        return redirect()->route('aluguel.index');
    }

    public function destroy($id) {
        aluguel::findOrFail($id)->delete();
        return redirect()->route('aluguel.index');
    }
    
}
