<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociatedLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associated_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('experimental_station_id')
                ->constrained('experimental_stations');
            $table->foreignId('province_id')
                ->constrained('provinces');
            $table->softDeletes();
            $table->timestamps();

            $table->string('localidad asociada')
                ->comment('Nombre de la localidad asociada a la estacion experimental');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('associated_locations');
    }
}
