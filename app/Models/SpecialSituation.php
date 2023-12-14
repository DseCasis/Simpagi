<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialSituation extends Model
{
    protected $table = 'special_situations';

    protected $fillable = [
        'situacion_especial'
    ];
}
