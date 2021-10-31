<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itensentrada extends Model
{
    use HasFactory;
//nome da tabela
    protected $table = "itensentrada";
  //Campos setados no banco

    protected $fillable = [
        'precocompra',  
        'idproduto', 
        'identrada'
    ];

    public function produto(){
        return $this->belongsTo(Produto::class, 'idproduto', 'id');
    }
    public function entrada(){
        return $this->belongsTo(Entrada::class, 'identrada', 'id');
    }
}
