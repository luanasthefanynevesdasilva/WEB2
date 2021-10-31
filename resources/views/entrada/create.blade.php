<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Entrada</title>
    </head>
    <body>
<div>
    <form action="{{route('entrada.store')}}" method="post">
        @csrf
        <label for="valortotal">Valor total</label>
        <input type="text" name="valortotal" id="valortotal">
        {{$idfornecedor}}
        <input type="hidden" name="idfornecedor" value={{$idfornecedor}}>
        <input type="submit" value="Cadastrar">
    </form>
</div>
</html>