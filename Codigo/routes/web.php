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

Route::get('/index', [ClienteController::class, 'index'])->name('index');
Route::get('/cliente/create',[ClienteController::Class, 'create'])->name('clientecreate');
Route::get('/cliente/edit/{id}',[ClienteController::Class, 'edit'])->name('clientesedit');
Route::get('/cliente/update/{id}',[ClienteController::Class, 'update'])->name('clienteupdate');
Route::get('/cliente/show/{id}', [ClienteController::class, 'show'])->name('clienteshow');
Route::post('/storecliente', [ClienteController::class, 'store'])->name('storecliente');
Route::delete('cliente/{id}', [ClienteController::class, 'destroy'])->name('delete');
Route::get('/cliente/showendereco', [ClienteController::class, 'showendereco']);

Route::get('/index', [FornecedorController::class, 'index'])->name('index');
Route::get('/fornecedor/create', [FornecedorController::class, 'create'])->name('fornecedorcreate');
Route::get('/fornecedor/show/{id}', [FornecedorController::class, 'show'])->name('fornecedorshow');
Route::post('/storefornecedor', [FornecedorController::class, 'store'])->name('storefornecedor');

Route::get('/index', [ProdutoController::class, 'index'])->name('index');
Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produtocreate');
Route::get('/produto/show/{id}', [ProdutoController::class, 'show'])->name('produtoshow');
Route::post('/produto/store', [ProdutoController::class, 'store'])->name('produtostore');

Route::get('/venda/create/{id}', [VendaController::class, 'create'])->name('vendacreate');
Route::get('/venda/show/{id}', [VendaController::class, 'show'])->name('vendashow');
Route::post('/venda/store', [VendaController::class, 'store'])->name('vendastore');

Route::get('/entrada/show/{id}', [EntradaController::class, 'show'])->name('entradashow');
Route::get('/entrada/create/{id}', [EntradaController::class, 'create'])->name('entradacreate');
Route::post('/entrada/store', [EntradaController::class, 'store'])->name('entradastore');

Route::get('/itensentrada/show/{id}', [ItensentradaController::class, 'show'])->name('itensentrada.show');
Route::get('/itensentrada/create/{id}', [ItensentradaController::class, 'create'])->name('itensentrada.create');
Route::post('/itensentrada/store', [ItensentradaController::class, 'store'])->name('itensentrada.store');

Route::get('/itensvenda/show/{id}', [ItensvendaController::class, 'show'])->name('itensvendashow');
Route::get('/itensvenda/create/{id}', [ItensvendaController::class, 'create'])->name('itensvendacreate');
Route::post('/itensvenda/store', [ItensvendaController::class, 'store'])->name('itensvendastore');

Route::get('/endereco/create/{id}', [EnderecoController::class, 'create'])->name('enderecocreate');
Route::get('/endereco/show/{id}', [EnderecoController::class, 'show'])->name('enderecoshow');
Route::post('/endereco/store', [EnderecoController::class, 'store'])->name('enderecostore');