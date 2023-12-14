<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineResearch extends Model
{
    protected $table = 'line_researchs';

    protected $fillable = [
        'linea_investigacion'
    ];
}
