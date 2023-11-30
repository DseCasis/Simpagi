<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //use HasFactory;
    protected  $table = 'users';
    protected $fillable = [
        'cedula',
        'nombre',
        'apellido',
        'genero',
        'fecha de nacimiento',
        'fecha de ingreso',
        'numero de imposiciones',
        'titulo academico',
        'telefono institucional',
        'textension telefonica',
        'correo institucional',
        'actividad esigef',
        'remuneracio',
        'viatico por residencia',
        'migrante retornado',

    ];
}
