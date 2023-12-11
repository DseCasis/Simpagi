<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment_Project extends Model
{
    protected $table = 'investment_projects';

    protected $fillable = [
        'name'
    ];
}
