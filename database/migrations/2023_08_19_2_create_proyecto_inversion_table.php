<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoInversionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_inversion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fondos_id')->constrained('fondos');
            $table->softDeletes();
            $table->timestamps();

            $table->string('proyecto')->comment('nombre del proyecto de inversion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto_inversion');
    }
}
