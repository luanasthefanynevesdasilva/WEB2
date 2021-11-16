@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
        <div id="header" class="containerHeader">
<div>
<div id="form" class="stylecrud">
    
@if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
    <form action="{{route('entradastore')}}" method="post">

        
        @csrf
        <label for="valortotal">Valor total</label>
        <input type="number" mim=0 name="valortotal" id="valortotal"required="required"><br>
        <label for="idfornecedor">Id Fornecedor</label>
        <input type="text" name="idfornecedor" id="idfornecedor"required="required"><br>
            </div>
          <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
@endsection

