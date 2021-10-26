<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Entradas</title>
</head>

<body>


    @if (Session::has('msg'))
        <div class="alert alert-primary" role="alert">
            {{ Session::get('msg') }}
        </div>
    @endif
    <div class="container pt-5">
        <h1>Lista de Entradas</h1>
        <a href="./entradas/create" class="btn btn-success mt-2">Adicionar</a>
        <table class="table table-striped table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">Nome do Fornecedor</th>
                    <th scope="col">Valor total</th>
                    <th scope="col">Data Compra</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entradas as $entrada)
                    <tr>
                        <td>{{ $entrada->idfornecedor }}</td>
                        <td>R$ {{ $entrada->valortotal }}</td>
                        <td>{{ $entrada->datacompra }}</td>
                        <td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>


@foreach ($entradas as $entrada)
<ul>
    <li>FORNECEDOR: {{ $entrada->idfornecedor }}</li>
    <li>VALOR TOTAL: R${{ $entrada->valortotal }}</li>
    <li>DATA DA COMPRA: {{ $entrada->datacompra }}</li>
</ul>
@endforeach