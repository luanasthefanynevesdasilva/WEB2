@extends('layouts.main')

@section('conteudo')
<div id="form">
    <form action="{{route('fornecedorupdate', ['id' => $fornecedor->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">fornecedor:</label>
        <input type="text" name="nome" id="nome" value="{{$fornecedor->nome}}">
        <label for="">email:</label>
        <input type="text" name="email" id="email" value="{{$fornecedor->email}}">
        <input type="submit" value="alterar">
    </form>
</div>
 
@endsection