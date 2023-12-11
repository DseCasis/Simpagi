<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ethnic_Group extends Model
{
    protected $table = 'ethnic_groups';

    protected $fillable = [
        'grupo_etnico'
    ];
}
