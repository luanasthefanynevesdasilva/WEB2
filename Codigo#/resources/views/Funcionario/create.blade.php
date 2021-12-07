@extends('layouts.main')

@section('conteudo')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">
<body class="bg-secondary">
    <div class="container">
        <h1 class="display-1 text-center text-light">Funcionario</h1>
    <form class="form form-compra" action="{{ route("Funcionario.store") }}" id="form" method="post">
        @csrf
        <div class="input">
            <label for="nome">Nome </label>
            <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome">
            @error('nome')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="">cpf</label>
            <input type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf">
            @error('cpf')
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
