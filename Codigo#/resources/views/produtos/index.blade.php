@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">
    </div>
    <table class="table mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Valor </th>
                <th scope="col">Desconto</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <th scope="col">{{ $produto->id }}</th>
                    <td>{{ $produto->nome }}</td> 
                    <td>{{ $produto->valor }}</td>
                    <td>{{ $produto->desconto }}</td>
                    <td class="d-flex justify-content-center">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection