<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensvendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itensvenda', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('idproduto');
            $table->unsignedBigInteger('idvenda');
            $table->float('valorvenda');
        });

        Schema::table('itensvenda', function (Blueprint $table){
            $table->foreign('idproduto')->references('id')->on('produto')->onDelete('cascade');
            $table->foreign('idvenda')->references('id')->on('venda')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itensvenda');
    }
}
