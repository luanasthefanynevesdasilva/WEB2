@extends('layouts.main')

@section('conteudo')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">
<body class="bg-secondary">
    <div class="container">
        <h1 class="display-1 text-center text-light">Realizar Aluguel</h1>
    <form class="form form-aluguel" action="{{ route("aluguel.store") }}" id="form" method="post">
        @csrf
        <div class="input m-3">
            <label for="cliente_id">Selecione o cliente</label>
            <input type="number" class="form-control @error('cliente_id') is-invalid @enderror" name="cliente_id">
            @error('cliente_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="idveiculo">selecione o veiculo</label>
            <input type="number" class="form-control @error('idveiculo') is-invalid @enderror" name="idveiculo">
            @error('idveiculo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="datalocacao">data_locacao</label>
            <input type="date" class="form-control @error('datalocacao') is-invalid @enderror" name="datalocacao">
            @error('datalocacao')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="diaria">diaria</label>
            <input type="text" class="form-control @error('diaria') is-invalid @enderror" name="diaria">
            @error('diaria')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="combustivel">combustivel</label>
            <input type="text" class="form-control @error('combustivel') is-invalid @enderror" name="combustivel">
            @error('combustivel')
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