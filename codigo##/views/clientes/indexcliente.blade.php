@extends('layouts.main')

@section('conteudo')
        <div id="header" class="containerHeader">

            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Debito</th>
      <th scope="col">Açoes</th>
    </tr>
  </thead>
  <tbody>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>        @foreach ($clientes as $cliente) {{$cliente->nome}}</td>
      <td>  {{$cliente->debito}}    </td>
      <td><a href="{{route('clienteedit', ['id' => $cliente->id])}}">editar
      <td>  </a>
      <form action="{{route('indexcliente')}}" method="POST">
                                <div>
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="deletar">
                                </div>
                            </form>
                        </td>
                    </div>
                </tr>
            @endforeach
        </table> 
        @endsection
