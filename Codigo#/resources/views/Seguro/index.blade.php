@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

        
    </div>
    <table class="table mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Valor</th>
                <th scope="col">datafinal</th>
                <th scope="col">datainicia</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($seguros as $seguro)
                <tr>
                    <th>{{ $seguro->id }}</th>
                    <td>{{ $seguro->Valor }}</td> 
                    <td>{{ $seguro->datafinal }}</td>
                    <td>{{ $seguro->datainicia }}</td>
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