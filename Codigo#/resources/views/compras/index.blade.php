@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

        
    </div>
    <table class="table mb-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Fornecedor</th>
                <th>Valor total</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($compras as $compra)
                <tr>
                    <th>{{ $compra->id }}</th>
                    <td>{{ $compra->fornecedor->nome }}</td> 
                    <td>{{ $compra->valortotal }}</td>
             
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection