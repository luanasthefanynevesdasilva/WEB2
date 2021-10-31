<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>venda</title>
    </head>
    <body>
<div id="form">
    <form action="{{route('venda.store')}}" method="post">
        @csrf
        <label for="valor">Valor</label>
        <input type="text" name="valor" id="valor">
        {{$idcliente}}
        <input type="hidden" name="idcliente" value={{$idcliente}}>
        <input type="submit" value="Cadastrar">
    </form>
</div>
</html>