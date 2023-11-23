<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModalitiesTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalities_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('modality_id')
                -> constrained('modalitys');
            $table->softDeletes();
            $table->timestamps();

            $table->string('modalidad', 100)
                -> comments('nombre de la modalidad')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modalities_types');
    }
}
