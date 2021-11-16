<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ItensvendaController;
use App\Http\Controllers\ItensentradaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
/*** */
Route::get('/', function () {
    return view('layouts.main');
});

//clientes
Route::get('/clientes/indexcliente', [ClienteController::class, 'indexcliente'])->name('indexcliente');
Route::get('/clientes/show/{id}', [ClienteController::class, 'show'])->name('clienteshow');
Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit'])->name('clienteedit');
Route::get('/clientes/showendereco', [ClienteController::class, 'showendereco']);
Route::put('/clientes/update/{id}', [ClienteController::class, 'update'])->name('clientesupdate');
Route::post('/storecliente', [ClienteController::class, 'store'])->name('storecliente');
Route::delete('clientes/{id}', [ClienteController::class, 'destroy'])->name('delete');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientecreate');

//fornecedor
Route::get('/fornecedor/indexfornecedor', [FornecedorController::class, 'indexfornecedor'])->name('indexfornecedor');
Route::get('/fornecedor/create', [FornecedorController::class, 'create'])->name('fornecedorcreate');
Route::post('/storefornecedor', [FornecedorController::class, 'store'])->name('storefornecedor');
Route::get('/fornecedor/edit/{id}', [FornecedorController::class, 'edit'])->name('fornecedoredit');
Route::put('/fornecedor/update/{id}', [FornecedorController::class, 'update'])->name('fornecedorupdate');
Route::get('/fornecedor/show/{id}', [FornecedorController::class, 'show'])->name('fornecedorshow');

//produto

Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produtocreate');
Route::post('/produto/store', [ProdutoController::class, 'store'])->name('produtostore');
Route::get('/produto/show/{id}', [ProdutoController::class, 'show'])->name('produtoshow');
Route::get('/produto/indexproduto', [ProdutoController::class, 'indexproduto'])->name('indexproduto');

//venda
Route::get('/venda/show/{id}', [VendaController::class, 'show'])->name('vendashow');
Route::get('/venda/create/{id}', [VendaController::class, 'create'])->name('vendacreate');
Route::post('/venda/store', [VendaController::class, 'store'])->name('vendastore');
Route::get('/venda/indexvenda', [VendaController::class, 'indexvenda'])->name('indexvenda');

//itensvenda
 
Route::get('/itensvenda/show/{id}', [ItensvendaController::class, 'show'])->name('itensvendashow');
Route::get('/itensvenda/create/{id}', [ItensvendaController::class, 'create'])->name('itensvendacreate');
Route::post('/itensvenda/store', [ItensvendaController::class, 'store'])->name('itensvendastore');
//itensentrada
Route::get('/itensentrada/show/{id}', [ItensentradaController::class, 'show'])->name('itensentradashow');
Route::get('/itensentrada/create/{id}', [ItensentradaController::class, 'create'])->name('itensentradacreate');
Route::post('/itensentrada/store', [ItensentradaController::class, 'store'])->name('itensentradastore');
//endereco
Route::get('/endereco/show/{id}', [EnderecoController::class, 'show'])->name('enderecoshow');
Route::get('/endereco/create/{id}', [EnderecoController::class, 'create'])->name('enderecocreate');
Route::post('/endereco/store', [EnderecoController::class, 'store'])->name('enderecostore');
Route::get('/endereco/indexendereco', [EnderecoController::class, 'indexendereco'])->name('indexendereco');

//entrada
Route::get('/entrada/show/{id}', [EntradaController::class, 'show'])->name('entradashow');
Route::get('/entrada/create/{id}', [EntradaController::class, 'create'])->name('entradacreate');
Route::post('/entrada/store', [EntradaController::class, 'store'])->name('entradastore');
Route::get('/entrada/indexentrada', [EntradaController::class, 'indexentrada'])->name('indexentrada');

