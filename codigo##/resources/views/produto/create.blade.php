@extends('layouts.main')

@section('conteudo')
        <div id="header" class="containerHeader">
            <h5>Cadastra Produto  </h5>
<div id="form">
    <form action="{{route('produtostore')}}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"><br><br>
         <label for="descriçao">descriçao</label>
        <input type="text" name="descriçao" id="descriçao"><br><br>
        <label for="desconto">Desconto</label>
        <input type="text" name="desconto" id="desconto"><br><br>
        <label for="Valor">Valor  </label>
        <input type="text" name="Valor" id="Valor"><br><br>
         <input type="submit" value="Cadastrar">
    </form>
</div>

@endsection
