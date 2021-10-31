<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de produtos</title>
    </head>
    <body>
<div id="form">
    <form action="{{route('produto.store')}}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="valordecompra">Valor de compra</label>
        <input type="number" name="valordecompra" id="valordecompra">
        <label for="valordevenda">Valor de venda</label>
        <input type="number" name="valordevenda" id="valordevenda">
        <input type="hidden" name="idproduto" value={{$idproduto}}>
        <input type="submit" value="Cadastrar">
    </form>
</div>
</html>
