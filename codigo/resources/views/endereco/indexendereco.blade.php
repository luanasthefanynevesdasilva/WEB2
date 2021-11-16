@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
<table class="table mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">logradouro</th>
                <th scope="col">bairro</th>
                <th scope="col">cidade</th>
                <th scope="col">uf</th>
                <th scope="col">idcliente</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
  <tbody>
  <tbody>
            @foreach ($endereco as $endereco)
                <tr>
                    <th>{{ $endereco->id }}</th>
                    <td>{{ $endereco->logradouro }}</td> 
                    <td>{{ $endereco->bairro }}</td>
                    <td>{{ $endereco->cidade }}</td>
                    <td>{{ $endereco->uf }}</td>
                    <td>{{ $endereco->idcliente }}</td>
                    <td class="d-flex justify-content-center">
                        <form action="{{route('indexendereco')}}" method="POST">
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