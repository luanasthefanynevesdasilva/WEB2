@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

       
    </div>
    <table class="table mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">email</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fornecedores as $fornecedor)
                <tr>
                    <th scope="col">{{ $fornecedor->id }}</th>
                    <td>{{ $fornecedor->nome }}</td> 
                    <td>{{ $fornecedor->email }}</td>
                    <td class="d-flex justify-content-center">
                     

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection