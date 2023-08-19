<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGranjaExperimentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('granja_experimental', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estacion_experimental_id')->constrained('estacion_experimental');
            $table->softDeletes();
            $table->timestamps();
            
            $table->string('nombre_granja')->comment('granjas experimentales operativas');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('granja_experimental');
    }
}
