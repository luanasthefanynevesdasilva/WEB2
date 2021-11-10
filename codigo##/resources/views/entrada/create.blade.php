@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
        <div id="header" class="containerHeader">
<div>

 <h4>Cadastro de Entrandas</h4>
    <form action="{{route('entradastore')}}" method="post">
        @csrf
        <label for="valortotal">Valor total</label>
        <input type="number" name="valortotal" id="valortotal"><br>
        <label for="idfornecedor">Id Fornecedor</label>
        <input type="text" name="idfornecedor" id="idfornecedor"><br>
            </div>
          <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
@endsection

