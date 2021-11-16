@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
<div id="form">
<div id="header" class="containerHeader">
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
    <form action="{{route('itensentradastore')}}" method="post">
        @csrf
        <label for="precocompra">Preço compra</label>
        <input type="number" min=1 name="precocompra" id="precocompra"required="required"><br>
        <label for="identrada">Id Entrada</label>
        <input type="text" name="identrada" id="identrada"required="required"><br><br>
        <label for="idproduto">Id produto</label>
        <input type="text" name="idproduto" id="idproduto"required="required"><br><br>
         <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
@endsection