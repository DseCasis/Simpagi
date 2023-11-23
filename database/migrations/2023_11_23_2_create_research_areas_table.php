<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_areas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('line_research_id')
                ->constrained('line_researchs');
            $table->softDeletes();
            $table->timestamps();

            $table->string('area_investigacion')
                ->comment('Nombre del área de investigación');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('research_areas');
    }
}
