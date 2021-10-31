<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de fornecedor</title>
    </head>
    <body>
    <div id ="form">
        @foreach ($fornecedors as $fornecedor)
            <ul>
                <li> Nome do fornecedor: {{$fornecedor->nome}} </li>
                <li> email do fornecedor: {{$fornecedor->email}} </li>
            </ul>
        @endforeach
    </div>
</body>
</html>