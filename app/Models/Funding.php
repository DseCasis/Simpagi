<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funding extends Model
{
    use HasFactory;

    protected $table = 'fundings';
    protected $fillable = [
        'fondo'
    ];

    public function projects(){
        return $this->hasMany(Investment_Project::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
