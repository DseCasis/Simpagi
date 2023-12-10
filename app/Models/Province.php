<?php

namespace App\Models;
use Webpatser\Countries\Countries;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //use HasFactory;
    protected $table = 'provinces';
    protected $fillable = [
        'id',
        'provincias',
    ];

    public function canton(){
        return $this->hasMany(Canton::class);
    }

}
