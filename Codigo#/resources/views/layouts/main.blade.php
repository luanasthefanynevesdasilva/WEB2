<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="./css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body class="bg-secondary">
<h1 class="display-1 text-center text-light" >Locadora de Veiculo</h1>
    <div class="container">
             <div class="btn-group p-3 table">
             <a  href="/Veiculo/create"class="btn btn-lg btn-outline-light">Veiculo</a>
             <a  href="/clientes/create"class="btn btn-lg btn-outline-light">Clientes</a>
             <a  href="/Funcionario/create"class="btn btn-lg btn-outline-light">Funcionario</a>
             <a  href="/devolucao/create"class="btn btn-lg btn-outline-light">Devolução</a>
             <a  href="/aluguel/create"class="btn btn-lg btn-outline-light">Aluguel</a>
             </div>
        </div>
        <div class="conteudo mt-3">
        @yield('conteudo')
    </div>
        <div id="footer">
            copyright @ WEB
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>