@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

    <form class="form form-venda" action="{{ route("vendas.store") }}" id="form" method="post">
        @csrf
        <div class="input m-3">
            <label for="cliente_id">IdCliente</label>
            <input type="number" class="form-control @error('cliente_id') is-invalid @enderror" name="cliente_id">
            @error('cliente_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="valortotal">valortotal</label>
            <input type="number" class="form-control @error('valortotal') is-invalid @enderror" name="valortotal">
            @error('valortotal')
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