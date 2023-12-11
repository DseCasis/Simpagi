<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General_Budget extends Model
{
    protected $table = 'general_budget_items';

    protected $fillable = [
        'partida_presupuestaria_general'
    ];
}
