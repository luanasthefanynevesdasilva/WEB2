<?php

use Illuminate\Facades\Route;
use app\Http\Controllers\ClienteController;


 Route::get('/index', [ClienteController::class, 'index']);

 Route::get('/create', [ClienteController::class, 'create']);

 Route::post('/store', [ClienteController::class, 'store']);



