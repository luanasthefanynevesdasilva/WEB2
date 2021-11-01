<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>    Fornecedor</title>
    </head>
    <body>
<div id="form">
    <form action="{{route('fornecedorupdate', ['id' => $fornecedor->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">fornecedor:</label>
        <input type="text" name="nome" id="nome" value="{{$fornecedor->nome}}">
        <label for="">email:</label>
        <input type="text" name="email" id="email" value="{{$fornecedor->email}}">
        <input type="submit" value="alterar">
    </form>
</div>
 
</body>
</html>