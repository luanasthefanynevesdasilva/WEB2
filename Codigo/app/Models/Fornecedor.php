<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    //nome da tabela
    protected $table = "fornecedor";

    //Campos setados no banco
    protected $fillable = [
        'nome', 
        'email'
];

    function entrada(){
        return $this->hasMany(Entrada::class, 'idfornecedor', 'id');
    }
}
