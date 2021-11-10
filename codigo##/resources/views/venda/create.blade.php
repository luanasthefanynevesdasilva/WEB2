@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
        <div id="header" class="containerHeader">
            <h5>Cadastrar Venda  </h5>
<div id="form">
    <form action="{{route('vendastore')}}" method="post">
        @csrf
        <label for="valor">Valor</label>
        <input type="text" name="valor" id="valor"><br>
        <label for="idcliente">Id cliente</label>
        <input type="text" name="idcliente" id="idcliente"><br>
          <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
@endsection
