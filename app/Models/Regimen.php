<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regimen extends Model
{
    //use HasFactory;
    protected $table = 'regimenes';
    protected $fillable = [
        'regimen',
    ];

    function modality(){
        return $this-> hasOne(Modality::class);
    }
}
