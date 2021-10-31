<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de clientes</title>
    </head>
    <body>
    <div id ="form">
        @foreach ($clientes as $cliente)
            <ul>
                <li> Nome do cliente: {{$cliente->nome}} </li>
                <li> Debito do cliente: {{$cliente->debito}} </li>
            </ul>
        @endforeach
    </div>
</body>
</html>