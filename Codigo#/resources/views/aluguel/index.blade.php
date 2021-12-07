@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

    <table class="table mb-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>Veiculo</th>
                <th> diaria</th>
                <th> datalocacao</th>
                <th> combustivelatual</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($aluguels as $aluguel)
                <tr>
                    <th>{{ $aluguel->id }}</th>
                    <td>{{ $aluguel->cliente->nome }}</td> 
                    <td>{{ $aluguel->veiculo->nome }}</td> 
                    <td>{{ $aluguel->diaria }}</td>
                    <td>{{ $aluguel->datalocacao }}</td>
                    <td>{{ $aluguel->combustivelatual }}</td>
                    <td class="d-flex justify-content-center">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection