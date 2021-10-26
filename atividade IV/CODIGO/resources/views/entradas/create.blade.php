<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de entradas</title>
</head>

<body>
    <div class="container">
        <div class=" text-center mt-5 ">
            <h1>Cadastro de entradas</h1>
        </div>
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="contact-form" role="form" method="POST"action="./store">
                                @csrf
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="idfornecedor">ID fornecedor *</label>
                                                <input id="idfornecedor" type="text" name="idfornecedor" id="idfornecedor" class="form-control"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"> 
                                            <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Enviar"> 
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
