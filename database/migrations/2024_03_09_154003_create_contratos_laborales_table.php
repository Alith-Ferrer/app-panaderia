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
        Schema::create('contratos_laborales', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo_contrato_laboral');
            $table->date('Fecha_inicio_contrato_laboral');
            $table->date('Fecha_fin_contrato_laboral');
            $table->decimal('Salario_contrato_laboral', 8, 2);
            $table->unsignedBigInteger('id_empleado');

            $table->foreign('id_empleado')->references('id')->on('empleados');
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
        Schema::dropIfExists('contratos_laborales');
    }
};
