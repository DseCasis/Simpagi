<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchArea extends Model
{
    protected $table = 'research_areas';

    protected $fillable = [
        'area_investigacion',
        'siglas'
    ];
}
