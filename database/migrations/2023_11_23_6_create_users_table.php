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
            $table->boolean('genero');
            $table->date('fecha_nacimiento');
            $table->date('fecha_ingreso');
            $table->bigInteger('numero_imposiciones');
            $table->bigInteger('telefono_institucional');
            $table->bigInteger('textension_telefonica');
            $table->string('correo_institucional');
            $table->string('actividad_esigef');
            $table->float('remuneracion');
            $table->boolean('viatico_residencia');
            $table->boolean('migrante_retornado');

            $table->foreignId('ethnic_id')
                ->constrained('ethnic_groups');

            $table->foreignId('nationalitie_id')
                ->constrained('nationalities');

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

            $table->foreignId('funding_id')
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
