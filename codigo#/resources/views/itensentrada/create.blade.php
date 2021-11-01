<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Itementrada</title>
    </head>
    <body>
<div id="form">
    <form action="{{route('itensentradastore')}}" method="post">
        @csrf
        <label for="precocompra">Preço compra</label>
        <input type="text" name="precocompra" id="precocompra">
         <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
</html>