@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
<table class="table mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">valortotal</th>
                <th scope="col">idfornecedor</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
  <tbody>
  <tbody>
            @foreach ($entrada as $entrada)
                <tr>
                    <th>{{ $entrada->id }}</th>
                    <td>{{ $entrada->valortotal }}</td> 
                    <td>{{ $entrada->idfornecedor }}</td>
                    <td class="d-flex justify-content-center">
                        <form action="{{route('indexentrada')}}" method="POST">
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