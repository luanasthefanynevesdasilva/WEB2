<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;
//nome da tabela
    protected $table = "entrada";

  //Campos setados no banco
    protected $fillable = ['valortotal', 'idfornecedor'];

    function itensentrada(){
        return $this->hasMany(Itensentrada::class, 'identrada', 'id');
    }
    
    public function fornecedor(){
        return $this->belongsTo(Fornecedor::class, 'idfornecedor', 'id');
    }


}
