<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    const MALE = true;
    const FEMALE = false;

    //use HasFactory;
    protected  $table = 'users';
    protected $fillable = [
        'cedula',
        'nombre',
        'apellido',
        'genero',
        'fecha_nacimiento',
        'fecha_ingreso',
        'numero_imposiciones',
        'titulo_academico',
        'telefono_institucional',
        'textension_telefonica',
        'correo_institucional',
        'actividad_esigef',
        'remuneracion',
        'viatico_residencia',
        'migrante_retornado',

    ];

    public function ethnic()
    {
        return $this->belongsTo(EthnicGroup::class);
    }
    public function nationalitie()
    {
        return $this->belongsTo(Nationality::class);
    }
    public function associatedLocation()
    {
        return $this->belongsTo(AssociatedLocation::class);
    }
    public function process()
    {
        return $this->belongsTo(Process::class);
    }
    public function busy()
    {
        return $this->belongsTo(Busy::class);
    }
    public function training()
    {
        return $this->belongsTo(Training::class);
    }
    public function academicTitle()
    {
        return $this->belongsTo(AcademicTitle::class);
    }
    public function priorityGroup()
    {
        return $this->belongsTo(PriorityGroup::class);
    }
    public function funding()
    {
        return $this->belongsTo(Funding::class);
    }
    public function regimen()
    {
        return $this->belongsTo(Regimen::class);
    }
}
