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
            
            $table->string('cedula')->unique();
            $table->string('nombre');
            $table->string('correo')->unique();
            $table->string('telefono');
            $table->string('contrasena');
            $table->string('foto_perfil');
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
