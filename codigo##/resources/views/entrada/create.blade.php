<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css da aplicaçao -->
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">
    <title>Sistema de Venda</title>
</head>
<body>
<h1>Sistema de vendas</h1>
        </div>
        <div id="nav">
            <!-- Grey with black text -->
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/produto/create">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/clientes/create">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/venda/create/{id">Vendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fornecedor/create">Fornecedores</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="header" class="containerHeader">
<div>

 <h4>Cadastro de Entrandas</h4>
    <form action="{{route('entradastore')}}" method="post">
        @csrf
        <label for="valortotal">Valor total</label>
        <input type="number" name="valortotal" id="valortotal"><br>
        <label for="idfornecedor">Id Fornecedor</label>
        <input type="text" name="idfornecedor" id="idfornecedor"><br>
            </div>
          <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
</html>
