@extends('layouts.main')

@section('conteudo')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">
<body class="bg-secondary">
    <div class="container">
        <h1 class="display-1 text-center text-light">Seguro </h1>

    <form class="form" action="{{ route("seguro.store") }}" method="POST">
        @csrf
        <div>
            <label for="valor">valor</label>
            <input type="text" class="form-control @error('valor') is-invalid @enderror" name="valor">
            @error('valor')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <label for="datainicia">datainicia</label>
            <input type="date" class="form-control @error('datainicia') is-invalid @enderror" name="datainicia">
            @error('datainicia')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="datafinal">datafinal</label>
            <input type="date" class="form-control @error('datafinal') is-invalid @enderror" name="datafinal">
            @error('datafinal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="input m-3">
            <input type="submit" class="form-control btn-success" value="Cadastrar">
        </div>
    </form>
@endsection