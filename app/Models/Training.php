<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $table = 'trainings';
    protected $fillable = [
        'formacion_academica'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
