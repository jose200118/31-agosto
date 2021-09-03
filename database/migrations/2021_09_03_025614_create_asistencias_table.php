<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->date('fechaasistencia');
            $table->time('horario', $precision = 0);
            $table->string('asistenciascol',2);
            $table->unsignedBigInteger('aprendizs_id');
            $table->unsignedBigInteger('fichas_id');
            $table->foreign('aprendizs_id')->references('id')->on('aprendizs');
            $table->foreign('fichas_id')->references('id')->on('fichas');
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
        Schema::dropIfExists('asistencias');
    }
}
