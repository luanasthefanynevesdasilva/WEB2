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
*/

Route::get('/', function () {
    return view('welcome');
});

//clientes
Route::get('/clientes/indexcliente', [ClienteController::class, 'indexcliente'])->name('indexcliente');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientecreate');
Route::post('/storecliente', [ClienteController::class, 'store'])->name('storecliente');
Route::get('/clientes/show/{id}', [ClienteController::class, 'show'])->name('clienteshow');
Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit'])->name('clienteedit');
Route::put('/clientes/update/{id}', [ClienteController::class, 'update'])->name('clientesupdate');
Route::delete('clientes/{id}', [ClienteController::class, 'destroy'])->name('delete');
Route::get('/clientes/showendereco', [ClienteController::class, 'showendereco']);

//fornecedor
Route::get('/fornecedor/index', [FornecedorController::class, 'indexfornecedor'])->name('indexfornecedor');
Route::get('/fornecedor/create', [FornecedorController::class, 'create'])->name('fornecedorcreate');
Route::post('/fornecedor/store', [FornecedorController::class, 'store'])->name('storefornecedor');
Route::get('/fornecedor/show/{id}', [FornecedorController::class, 'show'])->name('fornecedorshow');
Route::get('/fornecedor/edit/{id}', [FornecedorController::class, 'edit'])->name('fornecedoredit');
Route::put('/fornecedor/update/{id}', [FornecedorController::class, 'update'])->name('fornecedorupdate');
Route::delete('fornecedor/{id}', [FornecedorController::class, 'destroy'])->name('delete');

//produto
Route::get('/produto/show/{id}', [ProdutoController::class, 'show'])->name('produtoshow');
Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produtocreate');
Route::post('/produto/store', [ProdutoController::class, 'store'])->name('produtostore');

//venda
Route::get('/venda/show/{id}', [VendaController::class, 'show'])->name('vendashow');
Route::get('/venda/create', [VendaController::class, 'create'])->name('vendacreate');
Route::post('/venda/store', [VendaController::class, 'store'])->name('vendastore');

//endereco
Route::get('/endereco/show/{id}', [EnderecoController::class, 'show'])->name('enderecoshow');
Route::get('/endereco/create', [EnderecoController::class, 'create'])->name('enderecocreate');
Route::post('/endereco/store', [EnderecoController::class, 'store'])->name('enderecostore');

//entrada
Route::get('/entrada/show/{id}', [EntradaController::class, 'show'])->name('entradashow');
Route::get('/entrada/create', [EntradaController::class, 'create'])->name('entradacreate');
Route::post('/entrada/store', [EntradaController::class, 'store'])->name('entradastore');

//itensvenda
Route::get('/itensvenda/show/{id}', [ItensvendaController::class, 'show'])->name('itensvendashow');
Route::get('/itensvenda/create', [ItensvendaController::class, 'create'])->name('itensvendacreate');
Route::post('/itensvenda/store', [ItensvendaController::class, 'store'])->name('itensvendastore');

//itensentrada
Route::get('/itensentrada/show/{id}', [ItensentradaController::class, 'show'])->name('itensentradashow');
Route::get('/itensentrada/create', [ItensentradaController::class, 'create'])->name('itensentradacreate');
Route::post('/itensentrada/store', [ItensentradaController::class, 'store'])->name('itensentradastore');

