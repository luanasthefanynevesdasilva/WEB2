<h1>Página dos Venda </h1>

@foreach ($vendas as $venda)
<ul>
    <li>CLIENTE: {{ $venda->idcliente }}</li>
    <li>VALOR TOTAL: R${{ $venda->valortotal }}</li>
    <li>DATA DA VENDA: {{ $venda->datavenda }}</li>
</ul>
@endforeach