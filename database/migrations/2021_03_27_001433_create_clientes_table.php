<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('logradouro');
            $table->string('numero');
            $table->string('bairro');        
            $table->text('referencia')->nullable();
            $table->string('phone')->nullable();
            $table->string('celular');
            $table->dateTime('nascimento');
            $table->string('genero');
            $table->text('obs')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
