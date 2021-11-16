@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
        <div id="header" class="containerHeader">
            <h5>Cadastra Produto  </h5>
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
    <form action="{{route('produtostore')}}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"required="required"><br><br>
         <label for="descriçao">descriçao</label>
        <input type="text" name="descriçao" id="descriçao"required="required"><br><br>
        <label for="desconto">Desconto</label>
        <input type="number"  name="desconto" id="desconto"required="required"><br><br>
        <label for="valor">Valor  </label>
        <input type="number" name="valor" id="valor"required="required"><br><br>
         <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
@endsection
