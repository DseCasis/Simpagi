<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modality extends Model
{
    use HasFactory;
    protected $table = 'modalitys';
    protected $fillable = [
        'modalidad',
    ];

    function regimen(){
        return $this->belongsTo(Regimen::class);
    }
}
