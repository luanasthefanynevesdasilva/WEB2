<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aluguel extends Model
{
    use HasFactory;
    protected $table = 'aluguel';
    protected $fillable = [
        'cliente_id',  
        'valortotal'
    ];

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function itensVenda() {
        return $this->hasMany(ItemVenda::class);
    }
}
