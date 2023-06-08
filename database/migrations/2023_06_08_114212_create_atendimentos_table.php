<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtendimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id();
            $table->date("dia");
            $table->string("forma_pagamento")->nullable();
            $table->float("preco_total")->nullable();
            $table->boolean("pago")->nullable();
            $table->foreignId('clientes_id')
                  ->constrained('clientes');
            $table->foreignId('empresas_id')
                ->constrained('empresas');
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
        Schema::dropIfExists('atendimentos');
    }
}
