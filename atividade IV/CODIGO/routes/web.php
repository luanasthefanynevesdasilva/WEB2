<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\FornecedorController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('clientes')->group(function () {
    Route::get('/create', [ClienteController::class, 'create']);
    Route::post('/store', [ClienteController::class, 'store']);
});

Route::prefix('produtos')->group(function () {
    Route::get('/create', [ProdutoController::class, 'create']);
    Route::post('/store', [ProdutoController::class, 'store']);
});

Route::prefix('entradas')->group(function () {
    Route::get('/create', [EntradaController::class, 'create']);
    Route::post('/store', [EntradaController::class, 'store']);
});

Route::prefix('vendas')->group(function () {
    Route::get('/create', [VendaController::class, 'create']);
    Route::post('/store', [VendaController::class, 'store']);
});

Route::prefix('fornecedores')->group(function () {
    Route::get('/create', [FornecedorController::class, 'create']);
    Route::post('/store', [FornecedorController::class, 'store']);
});
