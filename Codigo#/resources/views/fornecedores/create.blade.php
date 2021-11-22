@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

    <form class="form" action="{{ route("fornecedores.store")}}" method="POST">
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
            <label for="email">email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email">
            @error('email')
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