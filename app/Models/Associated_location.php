<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associated_location extends Model
{
    protected $table = 'associated_locations';

    protected $fillable = [
        'localidad_asociada'
    ];
}
