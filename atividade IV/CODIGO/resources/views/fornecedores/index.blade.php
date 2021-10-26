<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Fornecedor</title>
</head>

<body>
   


    @if (Session::has('msg'))
        <div class="alert alert-primary" role="alert">
            {{ Session::get('msg') }}
        </div>
    @endif
    <div class="container pt-5">
        <h1>Lista de Fornecedores</h1>
        <a href="./fornecedores/create" class="btn btn-success mt-2">Adicionar</a>
        <table class="table table-striped table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">Nome do Fornecedor</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Criado em</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fornecedores as $fornecedor)
                    <tr>
                        <td>{{ $fornecedor->nome }}</td>
                        <td>{{ $fornecedor->cnpj }}</td>
                        <td>{{ $fornecedor->telefone }}</td>
                        <td>{{ $fornecedor->endereco }}</td>
                        <td>{{ $fornecedor->created_at }}</td>
                        <td>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>


{{-- 
<h1>Página de fornecedores</h1>

@foreach ($fornecedores as $fornecedor)
<ul>
    <li>NOME: {{ $fornecedor->nome }}</li>
    <li>CNPJ: {{ $fornecedor->cnpj }}</li>
    <li>TELEFONE: {{ $fornecedor->telefone }}</li>
    <li>ENDEREÇO: {{ $fornecedor->endereco }}</li>
</ul>
@endforeach --}}