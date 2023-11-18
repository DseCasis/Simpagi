<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacedRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placed_rols', function (Blueprint $table) {
            $table->id();
            $table->foreignId('position_id')
                -> constraint('positions');
            $table->softDeletes();
            $table->timestamps();

            $table->string('rol', 100)
                -> comments('rol del trabajador')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('placed_rols');
    }
}
