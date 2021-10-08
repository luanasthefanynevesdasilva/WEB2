<?php

use Illuminate\Facades\Route;
use app\Http\Controllers\FornecedorController;

Route::get('/', function(){
    return view ('welcome');
});

Route::get('/fornecedor', [FornecedorController::class, 'show']);
?>