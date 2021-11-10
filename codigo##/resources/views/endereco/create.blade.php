@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
        <div id="header" class="containerHeader">
<div>
    <h4>Cadastrar Endereco </h4>
    <form action="{{route('enderecostore')}}" method="post">
        @csrf
        <label for="logradouro">Logradouro</label>
        <input type="text" name="logradouro" id="logradouro"><br><br>
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro"><br><br>
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade"><br><br>
        <label for="uf">UF</label>
        <input type="text" name="uf" id="uf"><br><br>
        <label for="idcliente">Id cliente</label>
        <input type="text" name="idcliente" id="idcliente"><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
@endsection
