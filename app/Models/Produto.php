<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;
//nome da tabela
    protected $table = "produto";
  //Campos setados no banco

    protected $fillable = [
        'nome', 
        'valordecompra',
         'valordevenda'
        ];

    function itensentrada(){
        return $this->hasMany(Itensentrada::class, 'idproduto', 'id');
    }
    function itensvenda(){
        return $this->hasMany(Itensvenda::class, 'idproduto', 'id');
    }
}
