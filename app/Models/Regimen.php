<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regimen extends Model
{
    use HasFactory;

    protected $table = 'regimenes';
    protected $fillable = [
        'regimenes',
    ];

    function modality(){
        return $this-> hasMany(Modality::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
