<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar fornecedor</title>
    </head>
    <body>
<div id="form">
    <form action="{{route('fornecedor.update', ['id' => $fornecedor->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">nome:</label>
        <input type="text" name="nome" id="nome" value="{{$fornecedor->nome}}">
        <label for="">Email:</label>
        <input type="text" name="email" id="email" value="{{$fornecedor->email}}">
        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>