<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCantonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canton', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provincia_id')->constrained('provincia');
            $table->softDeletes();
            $table->timestamps();

            $table->string('nombre_canton')->comment('cantones del ecuador (250)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canton');
    }
}
