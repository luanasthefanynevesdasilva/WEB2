<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\devolucaoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\aluguelController;
use App\Http\Controllers\seguroController;

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
    return view('layouts.main');
});

//clientes
Route::prefix('/clientes')->group(function() {
    Route::get('/index', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/store', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/edit/{id}', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/update/{id}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/delete/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
    Route::get('/show/{id}', [ClienteController::class, 'show'])->name('clientes.show');

});

//Funcionario
Route::prefix('/Funcionario')->group(function() {
    Route::get('/index', [FuncionarioController::class, 'index'])->name('Funcionario.index');
    Route::get('/create', [FuncionarioController::class, 'create'])->name('Funcionario.create');
    Route::post('/store', [FuncionarioController::class, 'store'])->name('Funcionario.store');
    Route::get('/edit/{id}', [FuncionarioController::class, 'edit'])->name('Funcionario.edit');
    Route::put('/update/{id}', [FuncionarioController::class, 'update'])->name('Funcionario.update');
    Route::delete('/delete/{id}', [FuncionarioController::class, 'destroy'])->name('Funcionario.destroy');
    Route::get('/show/{id}', [FuncionarioController::class, 'show'])->name('Funcionario.show');

});

//Veiculo
Route::prefix('/Veiculo')->group(function() {
    Route::get('/index', [VeiculoController::class, 'index'])->name('Veiculo.index');
    Route::get('/create', [VeiculoController::class, 'create'])->name('Veiculo.create');
    Route::post('/store', [VeiculoController::class, 'store'])->name('Veiculo.store');
    Route::get('/edit/{id}', [VeiculoController::class, 'edit'])->name('Veiculo.edit');
    Route::put('/update/{id}', [VeiculoController::class, 'update'])->name('Veiculo.update');
    Route::delete('/delete/{id}', [VeiculoController::class, 'destroy'])->name('Veiculo.destroy');
    Route::get('/show/{id}', [VeiculoController::class, 'show'])->name('Veiculo.show');

});

//aluguel
Route::prefix('/aluguel')->group(function() {
    Route::get('/index', [aluguelController::class, 'index'])->name('aluguel.index');
    Route::get('/create', [aluguelController::class, 'create'])->name('aluguel.create');
    Route::post('/store', [aluguelController::class, 'store'])->name('aluguel.store');
    Route::get('/edit/{id}', [aluguelController::class, 'edit'])->name('aluguel.edit');
    Route::put('/update/{id}', [aluguelController::class, 'update'])->name('aluguel.update');
    Route::delete('/delete/{id}', [aluguelController::class, 'destroy'])->name('aluguel.destroy');
    Route::get('/show/{id}', [aluguelController::class, 'show'])->name('aluguel.show');

});

//Seguro
Route::prefix('/Seguro')->group(function() {
    Route::get('/index', [SeguroController::class, 'index'])->name('Seguro.index');
    Route::get('/create', [SeguroController::class, 'create'])->name('Seguro.create');
    Route::post('/store', [SeguroController::class, 'store'])->name('Seguro.store');
    Route::get('/edit/{id}', [SeguroController::class, 'edit'])->name('Seguro.edit');
    Route::put('/update/{id}', [SeguroController::class, 'update'])->name('Seguro.update');
    Route::delete('/delete/{id}', [SeguroController::class, 'destroy'])->name('Seguro.destroy');
    Route::get('/show/{id}', [SeguroController::class, 'show'])->name('Seguro.show');

});

//devolucao
Route::prefix('/devolucao')->group(function() {
    Route::get('/index', [devolucaoController::class, 'index'])->name('devolucao.index');
    Route::get('/create', [devolucaoController::class, 'create'])->name('devolucao.create');
    Route::post('/store', [devolucaoController::class, 'store'])->name('devolucao.store');
    Route::get('/edit/{id}', [devolucaoController::class, 'edit'])->name('devolucao.edit');
    Route::put('/update/{id}', [devolucaoController::class, 'update'])->name('devolucao.update');
    Route::delete('/delete/{id}', [devolucaoController::class, 'destroy'])->name('devolucao.destroy');
    Route::get('/show/{id}', [devolucaoController::class, 'show'])->name('devolucao.show');

});

