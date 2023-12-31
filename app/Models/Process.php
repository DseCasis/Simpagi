<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $table = 'process';

    protected $fillable = [
        'proceso'
    ];

    public function unidad(){
        return $this->hasMany('Unit');
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
