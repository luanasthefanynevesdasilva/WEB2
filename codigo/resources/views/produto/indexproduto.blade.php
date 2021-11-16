@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">
<body>
        <div id="header" class="containerHeader">
            <h5>Lista Fornecedores </h5>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">descrição</th>
      <th scope="col">desconto</th>
      <th scope="col">valor</th>
      <th scope="col">Açoes</th>
      </tr>
        </thead>
  <tbody>
  <tbody>
   
     @foreach ($produto as $produto) 
     <tr>
     <td> {{$produto->id}}</td>
       <td> {{$produto->nome}}</td>
      <td>  {{$produto->descriçao}}    </td>
      <td>  {{$produto->desconto}}    </td>
      <td>  {{$produto->valor}}    </td>
      <td class="d-flex justify-content-center">
      <form action="{{route('indexproduto')}}" method="POST">
                               
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