<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssociatedLocation extends Model
{
    use HasFactory;

    protected $table = 'associated_locations';

    protected $fillable = [
        'localidad_asociada'
    ];

    public function station(){
        return $this->hasOne(ExperimentalStation::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
