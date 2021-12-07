@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

        
    </div>
    <table class="table mb-5">
        <thead>
            <tr>
                <th>#</th>
                <th>nome</th>
                <th>cpf</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionario)
                <tr>
                    <th>{{ $funcionario->id }}</th>
                    <td>{{ $funcionario->nome }}</td> 
                    <td>{{ $funcionario->cpf }}</td>
             
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection