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
            $table->timestamps();
            $table->string('nome', 100)->nullable();;
            $table->string('logradouro');
            $table->string('numero');
            $table->string('bairro');        
            $table->text('referencia');
            $table->string('phone');
            $table->string('celular')->nullable();
            $table->dateTime('nascimento');
            $table->string('genero');
            $table->text('obs');
                

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
