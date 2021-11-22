@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

    <form class="form" action="{{ route("produtos.store") }}" method="POST">
        @csrf
        <div class="input m-3">
            <label for="nome">Nome</label>
            <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome">
            @error('nome')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="desconto">desconto</label>
            <input type="number" class="form-control @error('desconto') is-invalid @enderror" name="desconto">
            @error('desconto')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="valor">valor</label>
            <input type="number" class="form-control @error('valor') is-invalid @enderror" name="valor">
            @error('valor')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <input type="submit" class="form-control btn-success" value="Cadastrar">
        </div>
    </form>
@endsection