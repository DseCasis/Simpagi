<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busy extends Model
{
    protected $table = 'busys';

    protected $fillable = [
        'ocupado'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
