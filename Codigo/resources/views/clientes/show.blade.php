<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clientes</title>
    </head>
    <body>
    <div id ="form">
        @foreach ($clientes as $cliente)
            <ul>
                <li> Nome: {{$cliente->nome}} </li>
                <li> Debito: {{$cliente->debito}} </li>
            </ul>
        @endforeach
    </div>
</body>
</html>