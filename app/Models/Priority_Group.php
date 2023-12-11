<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Priority_Group extends Model
{
    protected $table = 'priority_groups';

    protected $fillable = [
        'grupo_prioritario',
    ];
}
