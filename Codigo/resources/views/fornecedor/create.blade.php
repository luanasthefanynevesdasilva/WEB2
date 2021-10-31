<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de fornecedores</title>
    </head>
    <body>
<div>
    <form action="{{route('fornecedor.create')}}" method="post">
        @csrf
        <label for="">Nome fornecedor</label>
        <input type="text" name="nome" id="nome">
        <label for="">E-mail</label>
        <input type="text" name="email" id="email">
        <input type="submit" value="cadastrar">
    </form>
</div>
</body>
</html>
