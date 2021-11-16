@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
        <div id="header" class="containerHeader">
            <h1> Editar Cliente</h1>
<div id="form">
    <form action="{{route('clientesupdate', ['id' => $cliente->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Cliente:</label>
        <input type="text" name="nome" id="nome" value="{{$cliente->nome}}"
        required="required">
        <br>
        <label for="">Debito:</label>
        <input type="number" mim =0 name="debito" id="debito" value="{{$cliente->debito}}"
        required="required">
        <br>
        <input type="submit" value="alterar"><br>
    </form>
</div>
</body>
@endsection
