<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de clientes</title>
    </head>
    <body>
<div id="form">
    <form action="{{route('cliente.create')}}" method="post">
        @csrf
        <label for="">Nome clientes</label>
        <input type="text" name="nome" id="nome">
        <label for="">Debito</label>
        <input type="text" name="debito" id="debito">
        <label for="">Endereco</label>
        <input type="text" name="endereco" id="endereco">
        <input type="submit" value="cadastrar">
    </form>
</div>
    </body>
</html>