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
            <h5>Cadastra Clientes  </h5>
    <form action="{{route('storecliente')}}" method="post">
    @csrf
    
        <label for="">Nome clientes</label>
        <input type="text" name="nome" id="nome"><br><br>
        <label for="">Debito</label>
        <input type="text" name="debito" id="debito"><br><br>
        <label for="">Endereco</label>
        <input type="text" name="endereco" id="endereco"><br><br>
        <input type="submit" value="cadastrar">
        <div id="footer">
            copyright @ WEB
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>