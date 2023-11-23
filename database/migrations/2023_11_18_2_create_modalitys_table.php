<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModalitysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalitys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('regimene_id')
                -> constrained('regimenes');
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
        Schema::dropIfExists('modalitys');
    }
}
