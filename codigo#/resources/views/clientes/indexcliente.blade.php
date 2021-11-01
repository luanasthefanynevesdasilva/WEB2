<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>    clientes</title>
    </head>
    <body>
    <div id="form">
        @foreach ($clientes as $cliente)
        <ul>
            <li>   {{$cliente->nome}} </li>
            <li>  {{$cliente->debito}} </li>
            <li><a href="{{route('clienteedit', ['id' => $cliente->id])}}">editar  </a></li>

            <form action="{{route('indexliente')}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="deletar">
            </form>
        </ul>
        @endforeach
    </div>
 
</body>
</html>