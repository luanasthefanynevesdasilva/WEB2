@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

        
    </div>
    <table class="table mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Débito</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <th>{{ $cliente->id }}</th>
                    <td>{{ $cliente->nome }}</td> 
                    <td>{{ $cliente->debito }}</td>
                    <td>{{ $cliente->endereco }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{route('clientes.edit', ['id' => $cliente->id])}}">editar                            <i class="far fa-edit"></i>
                        </a><br>
                      
                        </form>
                        </tr> 
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection