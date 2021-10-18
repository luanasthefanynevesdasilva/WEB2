<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro De Fornecedor</title>
</head>
<body>
<b1>Cadastro De Fornecedor</b1>
    <form action="store" method="post"><br>
    @csrf
    <div class="mb-3">
        <label for="">Nome </label>
        <input type="text" name="nome" id="nome">
        </div><br>
        <div class="mb-3">
        <label for="">CNPJ</label>
        <input type="text" name="cnpj" id="cnpj">
        </div><br>
        <div class="mb-3">
        <label for="">Email</label>
        <input type="text" name="email" id="email">
        </div><br>
        <div class="button"><br>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
    </form>

</body>
</html>


