@extends('layouts.main')

@section('conteudo')
        <div id="header" class="containerHeader">
            <h5>Lista Fornecedores </h5>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Açoes</th>
      </tr>
  </thead>
  <tbody>
  <tbody>
    <tr>
    <th scope="row">1</th>
      <td>        @foreach ($fornecedor as $fornecedor) {{$fornecedor->nome}}</td>
      <td>  {{$fornecedor->email}}    </td>
      <td><a href="{{route('fornecedoredit', ['id' => $fornecedor->id])}}">editar
      <td>  </a>
      <form action="{{route('indexfornecedor')}}" method="POST">
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
    
    </td>
    </tr>
   
    @endsection
