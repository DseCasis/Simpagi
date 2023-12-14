<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $table = 'management';

    protected $fillable = [
        'gestion'
    ];

    public function gestion(){
        return $this->belongsTo('Unit');
    }

    public function area(){
        return $this->hasMany('Area');
    }
}
