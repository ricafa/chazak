<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtendimentoServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendimento_servicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('atendimentos_id')
                  ->constrained('atendimentos');
            $table->foreignId('servicos_id')
                  ->constrained('servicos');
            $table->float("preco");
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
        Schema::dropIfExists('atendimento_servicos');
    }
}
