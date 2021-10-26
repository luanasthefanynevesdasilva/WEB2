<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>

<body>
  
    @if (Session::has('msg'))
        <div class="alert alert-primary" role="alert">
            {{ Session::get('msg') }}
        </div>
    @endif
    <div class="container pt-5">
        <h1>Lista de Produtos</h1>
        <a href="./produtos/create" class="btn btn-success mt-2">Adicionar</a>
        <table class="table table-striped table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">ICMS</th>
                    <th scope="col">IPI</th>
                    <th scope="col">FRETE</th>
                    <th scope="col">PREÇO NA FÁBRICA</th>
                    <th scope="col">PREÇO DE COMPRA</th>
                    <th scope="col">PREÇO DE VENDA</th>
                    <th scope="col">LUCRO</th>
                    <th scope="col">DESCONTO</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col">Criado em</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->nome }} </td>
                        <td>{{ $produto->icms }}</td>
                        <td>{{ $produto->ipi }}</td>
                        <td>{{ $produto->frete }}</li>
                        <td>{{ $produto->precofabrica }}</td>
                        <td>{{ $produto->precocompra }}</td>
                        <td>{{ $produto->precovenda }}</td>
                        <td>{{ $produto->lucro }}</td>
                        <td>{{ $produto->desconto }}</td>
                        <td>{{ $produto->quantidade }}</td>
                        <td>{{ $produto->created_at }}</td>
                        <td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
