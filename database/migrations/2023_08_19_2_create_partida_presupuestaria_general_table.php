<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidaPresupuestariaGeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partida_presupuestaria_general', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estacion_experimental_id')->constrained('estacion_experimental');
            $table->softDeletes();
            $table->timestamps();

            $table->date('año_partida');
            $table->string('numero_partida_general');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partida_presupuestaria_general');
    }
}
