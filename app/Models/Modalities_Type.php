<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalities_Type extends Model
{
    protected $table = 'modalities_types';

    protected $fillable = [
        'modalidad'
    ];
}
