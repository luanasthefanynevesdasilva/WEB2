@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

       
    </div>
    <table class="table mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Total</th>
                <th scope="col">Extra</th>
                <th scope="col">Data_devolução</th>
                <th scope="col">metodopagamento</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($devolucaos as $devolucao)
                <tr>
                    <th scope="col">{{ $devolucao->id }}</th>
                    <td>{{ $devolucao->Total }}</td> 
                    <td>{{ $devolucao->Extra }}</td>
                    <td>{{ $devolucao->datadevolucao }}</td>
                    <td>{{ $devolucao->metodopagamento }}</td>
                    <td class="d-flex justify-content-center">
                     

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection