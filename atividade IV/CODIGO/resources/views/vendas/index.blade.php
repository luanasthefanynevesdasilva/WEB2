<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VENDA</title>
</head>

<body>
   
    @if (Session::has('msg'))
        <div class="alert alert-primary" role="alert">
            {{ Session::get('msg') }}
        </div>
    @endif
    <div class="container pt-5">
        <h1>VENDA</h1>
        <a href="./vendas/create" class="btn btn-success mt-2">Adicionar</a>
        <table class="table table-striped table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">Nome do Cleinte</th>
                    <th scope="col">VALOR TOTAL</th>
                    <th scope="col">DATA DA VENDA</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vendas as $venda)
                    <tr>
                        <td>{{ $venda->idcliente }}</td>
                        <td>R$ {{ $venda->valortotal }}</td>
                        <td>{{ $venda->datavenda }}</td>
                        <td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>

@foreach ($vendas as $venda)
<ul>
    <li>CLIENTE: {{ $venda->idcliente }}</li>
    <li>VALOR TOTAL: R${{ $venda->valortotal }}</li>
    <li>DATA DA VENDA: {{ $venda->datavenda }}</li>
</ul>
@endforeach