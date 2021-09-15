<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paciente_id');
            //$table->bigInteger('medico_id');
            $table->foreignId('medico_id')->constrained('medicos'); //segunda forma de declarar uma chave estrangeira, desta maneira o campo nao precisa ser criado dentro da tabela
            $table->date('data');
            $table->time('hora');
            $table->timestamps();
            $table->foreign('paciente_id')->references('id')->on('pacientes'); //Primeira maneira de declarar uma chave estrangeira
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
