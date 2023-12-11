<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic_Title extends Model
{
    protected $table = 'academic_titles';

    protected $fillable = [
        'titulo_academico',
    ];

}
