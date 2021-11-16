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
        <div id="header" class="containerHeader">
            <h5>Cadastra Fornecedor  </h5>
            <form action="{{route('storefornecedor')}}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"required="required"><br><br>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email"required="required"><br><br>
        <input type="submit" value="Cadastrar">
        </div>
    </form>
</div>
</body>
@endsection

