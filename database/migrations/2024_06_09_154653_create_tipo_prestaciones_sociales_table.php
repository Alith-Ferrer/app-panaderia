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
        Schema::create('tipo_prestaciones_sociales', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo');
            $table->unsignedBigInteger('id_prestacion_social');

            $table->foreign('id_prestacion_social')->references('id')->on('prestaciones_sociales');
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
        Schema::dropIfExists('tipo_prestaciones_sociales');
    }
};
