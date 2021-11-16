@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
        <div id="header" class="containerHeader">
            <h5>Cadastrar Venda  </h5>
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
    <form action="{{route('vendastore')}}" method="post">
        @csrf
        <label for="valor">Valor</label>
        <input type="number" mim=1 name="valor" id="valor"required="required"><br>
        <label for="idcliente">Id cliente</label>
        <input type="text" name="idcliente" id="idcliente"required="required"><br>
          <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
@endsection
