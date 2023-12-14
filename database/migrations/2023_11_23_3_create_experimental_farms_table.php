<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperimentalFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experimental_farms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('experimental_station_id')
                ->constrained('experimental_stations');
            $table->softDeletes();
            $table->timestamps();

            $table->string('finca_experimental')
                ->comment('Nombre de la finca experimental');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experimental_farms');
    }
}
