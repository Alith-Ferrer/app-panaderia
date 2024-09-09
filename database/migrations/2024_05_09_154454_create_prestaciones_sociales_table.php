<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestaciones_sociales', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo_prestacion');
            $table->string('Nombre_prestacion_social');
            $table->date('Fecha_inicio_prestacion');
            $table->date('Fecha_fin_prestacion');
            $table->unsignedBigInteger('id_contrato_laborar');

            $table->foreign('id_contrato_laborar')->references('id')->on('contratos_laborales');
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
        Schema::dropIfExists('prestaciones_sociales');
    }
};
