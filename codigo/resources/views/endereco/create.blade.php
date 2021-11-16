@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
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
<div>
    <h4>Cadastrar Endereco </h4>
    <form action="{{route('enderecostore')}}" method="post">
        @csrf
        <label for="logradouro">Logradouro</label>
        <input type="text" name="logradouro" id="logradouro" required="required"><br><br>
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro" required="required"><br><br>
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade"required="required"><br><br>
        <label for="uf">UF</label>
        <input type="text" name="uf" id="uf" required="required"><br><br>
        <label for="idcliente">Id cliente</label>
        <input type="text" name="idcliente" id="idcliente"required="required"><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
@endsection
