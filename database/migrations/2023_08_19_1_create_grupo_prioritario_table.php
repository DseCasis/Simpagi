<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoPrioritarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_prioritario', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            $table->timestamps();
            

            $table->string('nombre_grupo_prioritario')->comment('tipos de grupos vulnerables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo_prioritario');
    }
}
