@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
    <div id="header" class="containerHeader">

    <h4>Cadastrar Itemvenda </h4>
    <div id="header" class="containerHeader">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
    <form action="{{route('itensvendastore')}}" method="post">
        @csrf
        <label for="valorvenda">Valor venda</label>
        <input type="number" mim =1 name="valorvenda" id="valorvenda"required="required"><br>
        <label for="idvenda">Id venda</label>
        <input type="text" name="idvenda" id="idvenda"required="required"><br><br>
        <label for="idproduto">Id produto</label>
        <input type="text" name="idproduto" id="idproduto"required="required"><br><br>
         <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
@endsection

 