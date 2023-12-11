<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funding extends Model
{
    protected $table = 'foundings';

    protected $fillable = [
        'fondo'
    ];
}
