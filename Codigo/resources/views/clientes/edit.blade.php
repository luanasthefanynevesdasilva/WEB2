<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Clientes</title>
    </head>
    <body>
<div id="form">
    <form action="{{route('clientes.update', ['id' => $cliente->id])}}" method="post">
        @csrf
        <label for="">Cliente:</label>
        <input type="text" name="nome" id="nome" value="{{$cliente->nome}}">
        <label for="">Debito:</label>
        <input type="text" name="debito" id="debito" value="{{$cliente->debito}}">
        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>