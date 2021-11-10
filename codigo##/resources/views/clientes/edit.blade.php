@extends('layouts.main')

@section('conteudo')
        <div id="header" class="containerHeader">
            <h1> Editar Cliente</h1>
<div id="form">
    <form action="{{route('clientesupdate', ['id' => $cliente->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Cliente:</label>
        <input type="text" name="nome" id="nome" value="{{$cliente->nome}}"><br>
        <label for="">Debito:</label>
        <input type="text" name="debito" id="debito" value="{{$cliente->debito}}"><br>
        <input type="submit" value="alterar"><br>
    </form>
</div>
 
@endsection
