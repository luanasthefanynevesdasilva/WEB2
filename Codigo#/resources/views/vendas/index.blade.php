@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

    <table class="table mb-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>Valor total</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vendas as $venda)
                <tr>
                    <th>{{ $venda->id }}</th>
                    <td>{{ $venda->cliente->nome }}</td> 
                    <td>{{ $venda->valortotal }}</td>
                    <td class="d-flex justify-content-center">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection