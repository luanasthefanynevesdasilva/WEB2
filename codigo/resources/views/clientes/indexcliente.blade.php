@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
<table class="table mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Débito</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
  <tbody>
  <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <th>{{ $cliente->id }}</th>
                    <td>{{ $cliente->nome }}</td> 
                    <td>{{ $cliente->debito }}</td>
                    <td class="d-flex justify-content-center">
                    <a href="{{route('clienteedit', ['id' => $cliente->id])}}">editar                            <i class="far fa-edit"></i>
                        </a>
                        <form action="{{route('indexcliente')}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="deletar">
                                </div>
                            </form>
                        </td>
                    </div>
                </tr>
                <tr>
            @endforeach
        </table> 
        @endsection
</body>