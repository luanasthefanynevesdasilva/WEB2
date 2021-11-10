@extends('layouts.main')

@section('conteudo')
        <div id="header" class="containerHeader">
            <h5>Cadastra Fornecedor  </h5>
            <form action="{{route('storefornecedor')}}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"><br><br>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email"><br><br>
        <input type="submit" value="Cadastrar">
        </div>
    </form>
</div>
@endsection

