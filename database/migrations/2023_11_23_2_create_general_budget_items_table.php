<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralBudgetItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_budget_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('experimental_station_id')
                ->constrained('experimental_stations');
            $table->softDeletes();
            $table->timestamps();

            $table->string('partida presupuestaria general')
                ->comment('partida presupuestaria de cada estacion experimental');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_budget_items');
    }
}
