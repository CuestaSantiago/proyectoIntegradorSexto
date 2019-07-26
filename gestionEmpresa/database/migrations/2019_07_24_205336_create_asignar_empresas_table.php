<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignarEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignar_empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('empresa_id')->unsigned();
            $table->integer('estudiante_id')->unsigned();
            $table->integer('tutor_general_id')->unsigned();
            $table->integer('tutor_especifico_id')->unsigned();
            $table->integer('tutor_academico_id')->unsigned();
            $table->string('estado');
            $table->timestamps();
            $table->foreign('empresa_id')->references('id')->on('empresa');
            $table->foreign('estudiante_id')->references('id')->on('estudiante');
            $table->foreign('tutor_general_id')->references('id')->on('tutor_general');
            $table->foreign('tutor_especifico_id')->references('id')->on('tutor_especifico');
            $table->foreign('tutor_academico_id')->references('id')->on('tutor_academico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignar_empresas');
    }
}
