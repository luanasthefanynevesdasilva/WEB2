@extends('layouts.main')

@section('conteudo')
<div id="form">
    <form action="{{route('itensentradastore')}}" method="post">
        @csrf
        <label for="precocompra">Preço compra</label>
        <input type="text" name="precocompra" id="precocompra"><br>
        <label for="identrada">Id Entrada</label>
        <input type="text" name="identrada" id="identrada"><br><br>
        <label for="idproduto">Id produto</label>
        <input type="text" name="idproduto" id="idproduto"><br><br>
         <input type="submit" value="Cadastrar">
    </form>
</div>
@endsection