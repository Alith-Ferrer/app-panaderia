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
        Schema::create('beneficios', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_beneficio');
            $table->string('Tipo_beneficio');
            $table->decimal('Monto_correspondiente_beneficio', 8, 2);
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
        Schema::dropIfExists('beneficios');
    }
};
