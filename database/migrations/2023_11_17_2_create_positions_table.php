<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('scale_id')
                -> constrained('scales') -> comments('escala del trabajador');
            $table->foreignId('position_type_id')
                -> constrained('position_types');
            $table->softDeletes();
            $table->timestamps();

            $table->string('cargo', 100)
                -> comments('cargo del trabajador')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positions');
    }
}
