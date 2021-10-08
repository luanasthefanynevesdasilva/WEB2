<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Cliente;

class ClienteController extends Controllers{

    pubblic function show(){
        $clientes = Cliente::all();
        echo $clientes
    }
}