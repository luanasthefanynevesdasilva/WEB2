@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

    <form class="form form-compra" action="{{ route("compras.store") }}" id="form" method="post">
        @csrf
                    <div class="input">
                        <label for="valortotal">valortotal </label>
                        <input type="number" class="form-control @error('valortotal') is-invalid @enderror" name="valortotal">
                       
                        @error('valortotal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
        <div class="input m-3">
            <label for="">IDfornecedor</label>
            <input type="number" class="form-control @error('fornecedor_id') is-invalid @enderror" name="fornecedor_id">
            @error('fornecedor_id')
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
