@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">
    </div>
    <table class="table mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ano</th>
                <th scope="col">cor </th>
                <th scope="col">Placa</th>
                <th scope="col">modelo</th>
                <th scope="col">Nome</th>
                <th scope="col">Status</th>
                <th scope="col">seguro</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($veiculos as $veiculo)
                <tr>
                    <th scope="col">{{ $veiculo->id }}</th>
                    <td>{{ $veiculo->ano }}</td> 
                    <td>{{ $veiculo->cor }}</td>
                    <td>{{ $veiculo->Placa }}</td>
                    <td>{{ $veiculo->modelo }}</td>
                    <td>{{ $veiculo->Nome }}</td>
                    <td>{{ $veiculo->seguro }}</td>
                    <td>{{ $veiculo->Status }}</td>
                    <td class="d-flex justify-content-center">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
  