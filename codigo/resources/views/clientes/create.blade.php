@extends('layouts.main')

@section('conteudo')
<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

<body>
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
                <form action="{{route('storecliente')}}" method="post">
    @csrf    
    <div>
        <label for="">Nome clientes</label>
        <input type="text" name="nome" id="nome" 
        required="required">
</div>
        <label for="">Debito</label>
        <input type="number" mim =0 name="debito" id="debito"
        required="required"><br>
        <label for="">Endereco</label>
        <input type="text" name="endereco" id="endereco"
        required="required"><br>
        <input type="submit" value="cadastrar">


</div>
</body>
@endsection
