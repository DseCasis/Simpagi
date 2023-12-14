<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlacedRol extends Model
{
    protected $table = 'placed_rols';

    protected $fillable = [
        'rol'
    ];
}
