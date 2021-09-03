<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_instructors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('instructors_id');
            $table->unsignedBigInteger('fichas_id');
            $table->foreign('instructors_id')->references('id')->on('instructors');
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
        Schema::dropIfExists('ficha_instructors');
    }
}
