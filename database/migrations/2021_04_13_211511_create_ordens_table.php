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
           
          
            $table->unsignedBigInteger('mensagem_id');
            $table->foreign('mensagem_id')->references('id')->on('mensagens');

            $table->unsignedBigInteger('cobrador_id');
            $table->foreign('cobrador_id')->references('id')->on('cobradores');
            
            $table->string('receptor');
            $table->decimal("valoros", 10,2);
            $table->string('phone')->nullable();
            $table->string('celular');
            $table->text('genero');              
           
            $table->dateTime('dataos');
            $table->string('horarioos');
            $table->text('status');
            $table->string('obs')->nullable();
            $table->string('obscobrador')->nullable();
           // $table->decimal('valor', 10,2);
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
