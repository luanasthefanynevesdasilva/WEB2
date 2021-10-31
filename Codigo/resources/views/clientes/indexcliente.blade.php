<h1> Página de clientes </h1>


@foreach ($clientes as $cliente)
    <ul>
        <li>{{$cliente->nome}}</li>
        <li>{{$cliente->debito}}</li>
        <li>endereco {{$cliente->endereco}}</li>
        <li> <a href="edit/{{$cliente->id}}">Editar Cliente</a></li>
        
        <form action="{{route('clientes.delete', ['id' => $cliente->id])}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar">
        </form>
    </ul>

@endforeach

