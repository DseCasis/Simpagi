<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperimentalFarm extends Model
{
    //use HasFactory;
    protected $table = 'experimental_farms';
    protected $fillable = [
      'id',
      'nombre',
    ];
}
