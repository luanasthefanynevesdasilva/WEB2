<?php

use Illuminate\Facades\Route;
use app\Http\Controllers\FornecedorController;


 Route::get('/index', [FornecedorController::class, 'index']);

 Route::get('/create', [FornecedorController::class, 'create']);

 Route::post('/store', [FornecedorController::class, 'store']);



