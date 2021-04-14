<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordens', function (Blueprint $table) {
            $table->id();
           
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');

            $table->string('receptor');
            $table->string('phone');
            $table->string('celular');        
            $table->text('genero');
            $table->json('servicos');
            $table->string('mensagem');
            $table->dateTime('dataos');
            $table->string('horarioos');
            $table->text('status');
            $table->string('obs');
            $table->string('obscobrador');     
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
        Schema::dropIfExists('ordens');
    }
}
