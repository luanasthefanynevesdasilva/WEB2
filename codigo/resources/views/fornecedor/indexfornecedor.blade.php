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
      <th scope="col">Email</th>
      <th scope="col">Açoes</th>
      </tr>
        </thead>
  <tbody>
  <tbody>
   
     @foreach ($fornecedor as $fornecedor) 
     <tr>
     <td> {{$fornecedor->id}}</td>
       <td> {{$fornecedor->nome}}</td>
      <td>  {{$fornecedor->email}}    </td>
      <td class="d-flex justify-content-center">

       <a href="{{route('fornecedoredit', ['id' => $fornecedor->id])}}">editar
        </a>
      <form action="{{route('indexfornecedor')}}" method="POST">
                               
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