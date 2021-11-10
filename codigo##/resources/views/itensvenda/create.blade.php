@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
    <div id="header" class="containerHeader">

    <h4>Cadastrar Itemvenda </h4>
    <form action="{{route('itensvendastore')}}" method="post">
        @csrf
        <label for="valorvenda">Valor venda</label>
        <input type="text" name="valorvenda" id="valorvenda"><br>
        <label for="idvenda">Id venda</label>
        <input type="text" name="idvenda" id="idvenda"><br><br>
        <label for="idproduto">Id produto</label>
        <input type="text" name="idproduto" id="idproduto"><br><br>
         <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
@endsection

 