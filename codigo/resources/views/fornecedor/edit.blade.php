@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
<div id="form">
    <form action="{{route('fornecedorupdate', ['id' => $fornecedor->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">fornecedor:</label>
        <input type="text" name="nome" id="nome" value="{{$fornecedor->nome}}"required="required">
        <label for="">email:</label>
        <input type="text" name="email" id="email" value="{{$fornecedor->email}}"required="required">
        <input type="submit" value="alterar">
    </form>
</div>
</body>
@endsection