<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('titulo');
            // $table->string('data');
            // $table->string('duracao');
            // $table->unsignedBigInteger('pedido_id');
            // $table->foreign('pedido_id')->references('id')->on('pedido');
            // $table->timestamps();
            $table->string('titulo');
            $table->string('data');
            $table->string('duracao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filme');
    }
}