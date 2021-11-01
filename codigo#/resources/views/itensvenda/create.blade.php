<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> ItemVenda</title>
    </head>
    <body>
<div id="form">
    <form action="{{route('itensvendastore')}}" method="post">
        @csrf
        <label for="valorvenda">Valor venda</label>
        <input type="text" name="valorvenda" id="valorvenda">
         <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
</html>
