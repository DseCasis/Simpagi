<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramDepartment extends Model
{
    protected $table = 'program_departments';

    protected $fillable = [
        'programa_departamento'
    ];
}
