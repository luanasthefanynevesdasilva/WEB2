<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>    Fornecedor</title>
    </head>
    <body>
<div>
<div>
    <form action="{{route('fornecedorcreate')}}" method="post">
        @csrf
        <label for="">Nome  </label>
        <input type="text" name="nome" id="nome">
        <label for="">email</label>
        <input type="text" name="email" id="email">
        <input type="submit" value="cadastrar">
    </form>
</div>
</body>
</html>
