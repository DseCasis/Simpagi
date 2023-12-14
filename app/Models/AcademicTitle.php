<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicTitle extends Model
{
    use HasFactory;

    protected $table = 'academic_titles';
    protected $fillable = [
        'titulo_academico',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }

}
