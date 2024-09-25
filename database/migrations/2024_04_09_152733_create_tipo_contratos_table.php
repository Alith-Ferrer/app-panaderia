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
        Schema::create('tipo_contratos', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo');
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
        Schema::dropIfExists('tipo_contratos');
    }
};
