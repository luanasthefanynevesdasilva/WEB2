<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Intensentrada</title>
    </head>
    <body>
<div id="form">
    <form action="{{route('itensentrada.store')}}" method="post">
        @csrf
        <label for="precocompra">Preço </label>
        <input type="text" name="precocompra" id="precocompra">
        <input type="hidden" name="identrada" value={{$identrada}}>
        <input type="hidden" name="idproduto" value={{$idproduto}}>
        <input type="submit" value="Cadastrar">
    </form>
</div>
</html>