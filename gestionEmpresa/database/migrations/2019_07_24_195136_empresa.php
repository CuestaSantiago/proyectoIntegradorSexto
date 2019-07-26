<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('carrera');
            $table->string('nombre_empresa');
            $table->string('nombre_representante');
            $table->string('correo_empresarial');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('telefono_opcional');
            $table->dateTime('fecha_inicio_contrato');
            $table->dateTime('fecha_fin_contrato');
            $table->string('compensacion');
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
        Schema::dropIfExists('empresa');
    }
}
