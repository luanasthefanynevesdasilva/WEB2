@extends('layouts.main')

@section('conteudo')
<body>
<div id="header" class="containerHeader">
<h4>Clientes</h4>

    <form action="{{route('storecliente')}}" method="post">
    @csrf    
        <label for="">Nome clientes</label>
        <input type="text" name="nome" id="nome"><br><br>
        <label for="">Debito</label>
        <input type="text" name="debito" id="debito"><br><br>
        <label for="">Endereco</label>
        <input type="text" name="endereco" id="endereco"><br><br>
        <input type="submit" value="cadastrar">


</div>
</form>
@endsection
