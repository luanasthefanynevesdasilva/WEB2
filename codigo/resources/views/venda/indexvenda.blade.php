@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
<table class="table mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">valor</th>
                <th scope="col">idcliente</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
  <tbody>
  <tbody>
            @foreach ($venda as $venda)
                <tr>
                    <th>{{ $venda->id }}</th>
                    <td>{{ $venda->valor }}</td> 
                    <td>{{ $venda->idcliente }}</td>
                    <td class="d-flex justify-content-center">
                        <form action="{{route('indexvenda')}}" method="POST">
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