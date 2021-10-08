<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Shema\Blueprint;
use Illuminate\Support\facades\Schema;

class CreateFornecedor extends Migration
{
    @return void 

    public function up()
    {
        Schema::create('fornecedo', function(Blueprint $table){
            $table->id();
            $table->string('nome',60);
            $table->string('email',60);
            $table->string('CNPJ',60)
        });
    }
    @return void 

    public function down(){
        Schema::dropIfExtists('fornecedor');
    }
}