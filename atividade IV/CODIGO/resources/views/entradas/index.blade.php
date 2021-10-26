<h1>Página de entrada</h1>

@foreach ($entradas as $entrada)
<ul>
    <li>FORNECEDOR: {{ $entrada->idfornecedor }}</li>
    <li>VALOR TOTAL: R${{ $entrada->valortotal }}</li>
    <li>DATA DA COMPRA: {{ $entrada->datacompra }}</li>
</ul>
@endforeach