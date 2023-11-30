<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modality_type extends Model
{
    //use HasFactory;
    protected $table = 'modality_types';
    protected $fillable = [
        'modalidad',
    ];
}
