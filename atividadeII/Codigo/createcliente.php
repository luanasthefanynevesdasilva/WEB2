<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Shema\Blueprint;
use IlluminatezSupport\facadeszSchema;

class CreateClientes extends Migration{

    @return variant_mod

    public function up()
{
    Schema::create('clientes', function (Blueprint $table){
        $table->id():
        $table->timestamps();
        $table->string('nome',60);
        $tablee->string('endereco', 60);
        $table->float('debito');
    });
}
@return void 

public function down()
{
    schema::dropIfExists('clientes');
}
}