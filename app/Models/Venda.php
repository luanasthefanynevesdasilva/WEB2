<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venda extends Model
{
    use HasFactory;
//nome da tabela
    protected $table = "venda";
  //Campos setados no banco

    protected $fillable = [
        'valor',
         'idcliente'
        ];

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'idcliente', 'id');
    }

    function itensvenda(){
        return $this->hasMany(Itensvenda::class, 'idvenda', 'id');
    }
}
