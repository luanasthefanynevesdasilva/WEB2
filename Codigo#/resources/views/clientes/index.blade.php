@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body class="bg-secondary">

    <div class="container">
        <h3>Lista de Clientes</h3>
        <table class="table table-striped " id="table">
            <thead class="table-dark">        
            <tr>
                <th >#</th>
                <th>Nome</th>
                <th>Email</th>
                <th >telefone</th>
                <th >Endereço</th>
                <th>Açoes</th>
                <th>Açoes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr class=" text-light">
                    <th>{{ $cliente->id }}</th>
                    <td>{{ $cliente->nome }}</td> 
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>{{ $cliente->endereco }}</td>
                    <td>
            
            <a href="{{route('clientes.edit', [$cliente->id])}} "><input type="submit" class="btn btn-danger" value="editar"></a>
            </td>
            <td>
            <form action="{{route('clientes.destroy', [$cliente->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-secondary" value="deletar">
                
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
@endsection