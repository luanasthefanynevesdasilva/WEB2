@extends('layouts.main')

@section('conteudo')

<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

    <form class="form" action="{{ route("clientes.store") }}" method="POST">

        @csrf
        <div>
            <label for="nome">Nome</label>
            <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome">
            @error('nome')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco">
            @error('endereco')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="debito">debito</label>
            <input type="number" class="form-control @error('debito') is-invalid @enderror" name="debito">
            @error('debito')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="input m-3">
            <input type="submit" class="form-control btn-success" value="Cadastrar">
        </div>
    </form>
@endsection