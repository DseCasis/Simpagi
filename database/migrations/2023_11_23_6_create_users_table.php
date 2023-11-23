<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            $table->timestamps();

            $table->bigInteger('cedula');
            $table->string('nombre');
            $table->string('apellido');
            $table->boolean('Masculino', 'Femenino');
            $table->date('fecha de nacimiento');
            $table->date('fecha de ingreso');
            $table->bigInteger('numero de imposiciones');
            $table->string('titulo academico');
            $table->bigInteger('telefono institucional');
            $table->bigInteger('textension telefonica');
            $table->string('correo institucional');
            $table->string('actividad esigef');
            $table->double('remuneracio');
            $table->boolean('viatico por residencia');
            $table->boolean('migrante retornado');

            $table->foreignId('ethnic_group_id')
                ->constrained('ethnic_groups');
            $table->foreignId('nationalitie_id')
                ->constrained('nationalities');
            $table->foreignId('position_id')
                ->constrained('positions');
            $table->foreignId('associated_location_id')
                ->constrained('associated_locations');
            $table->foreignId('process_id')
                ->constrained('process');
            $table->foreignId('busy_id')
                ->constrained('busys');
            $table->foreignId('training_id')
                ->constrained('trainings');
            $table->foreignId('academic_title_id')
                ->constrained('academic_titles');
            $table->foreignId('priority_group_id')
                ->constrained('priority_groups');
            $table->foreignId('funding_Id')
                ->constrained('fundings');
            $table->foreignId('regimen_id')
                ->constrained('regimenes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
