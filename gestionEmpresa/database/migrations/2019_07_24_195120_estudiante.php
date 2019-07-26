<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estudiante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('carrera');
        $table->string('identificacion');
        $table->string('apellido1');
        $table->string('apellido2');
        $table->string('nombre1');
        $table->string('nombre2');
        $table->string('correo_institucional');
        $table->string('direccion');
        $table->string('telefono');
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
        Schema::dropIfExists('estudiante');
    }
}
