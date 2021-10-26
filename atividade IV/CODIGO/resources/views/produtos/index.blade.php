
                <h1>Página dos produtos </h1>

                @foreach ($produtos as $produto)
<ul>
    <li>NOME: {{ $produto->nome }}</li>
    <li>icms: {{ $produto->icms }}</li>
    <li>ipi: {{ $produto->ipi }}</li>
    <li>frete: {{ $produto->frete }}</li>
    <li>precofabrica: {{ $produto->precofabrica }}</li>
    <li>precocompra: {{ $produto->precocompra }}</li>
    <li>precovenda: {{ $produto->precovenda }}</li>
    <li>lucro: {{ $produto->lucro }}</li>
    <li>desconto: {{ $produto->desconto }}</li>
    <li>quantidade: {{ $produto->quantidade }}</li>

</ul>
@endforeach --}}