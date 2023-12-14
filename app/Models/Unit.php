<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'unit';

    protected $fillable = [
        'unidad'
    ];

    public function unidad(){
        return $this->belongsTo('Process');
    }

    public function gestion(){
        return $this->hasMany('Managemeent');
    }
}
