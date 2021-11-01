<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>    Fornecedor</title>
    </head>
    <body>
    <div id="form">
        @foreach ($fornecedors as $fornecedor)
        <ul>
            <li>   {{$fornecedor->nome}} </li>
            <li>  {{$fornecedor->email}} </li>
            <li><a href="{{route('fornecedoredit', ['id' => $fornecedor->id])}}">editar  </a></li>

            <form action="{{route('indexfornecedor')}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="deletar">
            </form>
        </ul>
        @endforeach
    </div>
 
</body>
</html>