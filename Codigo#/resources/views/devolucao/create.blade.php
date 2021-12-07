@extends('layouts.main')

@section('conteudo')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">
<body class="bg-secondary">
    <div class="container">
        <h1 class="display-1 text-center text-light">Realizar Devolução</h1>
        @csrf
        <div class="input m-3">
            <label for="idaluguel">seleciona o aluguel</label>
            <input type="text" class="form-control @error('idaluguel') is-invalid @enderror" name="idaluguel">
            @error('idaluguel')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="Extra">Valor_Extra</label>
            <input type="text" class="form-control @error('Extra') is-invalid @enderror" name="Extra">
            @error('Extra')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="combustiveldevolucao">combustivel_devolucao</label>
            <input type="text" class="form-control @error('combustiveldevolucao') is-invalid @enderror" name="combustiveldevolucao">
            @error('combustiveldevolucao')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input m-3">
            <label for="datadevolucao">data_devolucao</label>
            <input type="date" class="form-control @error('datadevolucao') is-invalid @enderror" name="datadevolucao">
            @error('datadevolucao')
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