<h1>fornecedores </h1>


@foreach ($fornecedores as $fornecedor)
    <ul>
        <li>nome do fornecedor: {{$fornecedor->nome}}</li>
        <li>email do fornecedor: {{$fornecedor->email}}</li>
    </ul>
@endforeach

