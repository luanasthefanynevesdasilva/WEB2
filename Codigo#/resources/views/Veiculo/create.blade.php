@extends('layouts.main')

@section('conteudo')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">
<body class="bg-secondary">
    <div class="container">
        <h1 class="display-1 text-center text-light">Veiculo</h1>
    <form class="form" action="{{ route("Veiculo.store") }}" method="POST">
        @csrf
        <div class="input m-3">
            <label for="cor">cor</label>
            <input type="text" class="form-control @error('cor') is-invalid @enderror" name="cor">
            @error('cor')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="ano">ano</label>
            <input type="text" class="form-control @error('ano') is-invalid @enderror" name="ano">
            @error('ano')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="Placa">Placa</label>
            <input type="text" class="form-control @error('Placa') is-invalid @enderror" name="Placa">
            @error('Placa')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="modelo">modelo</label>
            <input type="text" class="form-control @error('modelo') is-invalid @enderror" name="modelo">
            @error('modelo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="Nome">Nome</label>
            <input type="text" class="form-control @error('Nome') is-invalid @enderror" name="Nome">
            @error('Nome')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="seguro">seguro</label>
            <input type="text" class="form-control @error('seguro') is-invalid @enderror" name="seguro">
            @error('seguro')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="tipoveiculo">tipo_veiculo</label>
            <input type="text" class="form-control @error('tipoveiculo') is-invalid @enderror" name="tipoveiculo">
            @error('tipoveiculo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <input type="submit" class="form-control btn-success" value="Cadastrar">
        </div>
    </form>
    <script src="../../public/js/addCampo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

@endsection