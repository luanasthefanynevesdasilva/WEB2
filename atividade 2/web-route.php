<?php

use Illuminate\Facades\Route;
use app\Http\Controllers\clientecontroller;

Route::get('/', function(){
    return view('welcome');
});
Route::get('/clientes',[clientecontroller::class,'show']);
