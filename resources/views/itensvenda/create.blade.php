<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>itensvenda</title>
    </head>
    <body>
<div id="form">
    <form action="{{route('itensvenda.store')}}" method="post">
        @csrf
        <label for="valorvenda">Valor </label>
        <input type="text" name="valorvenda" id="valorvenda">
        <input type="hidden" name="idproduto" value={{$idproduto}}>
        <input type="hidden" name="idvenda" value={{$idvenda}}>
        <input type="submit" value="Cadastrar">
    </form>
</div>
</html>