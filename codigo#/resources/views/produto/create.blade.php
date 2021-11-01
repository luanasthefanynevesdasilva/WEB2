<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Produto</title>
    </head>
    <body>
<div id="form">
    <form action="{{route('produtostore')}}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
         <label for="descriçao">descriçao</label>
        <input type="text" name="descriçao" id="descriçao">
        <label for="desconto">Desconto</label>
        <input type="text" name="desconto" id="desconto">
        <label for="Valor">Valor  </label>
        <input type="text" name="Valor" id="Valor">
         <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
</html>
