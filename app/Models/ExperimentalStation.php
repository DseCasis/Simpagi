<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperimentalStation extends Model
{
    use HasFactory;

    protected $table = 'experimental_stations';
    protected $fillable = [
        'estacion_experimental',
    ];

    public function station(){
        return $this->belongsTo(AssociatedLocation::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function partida(){
        return $this->hasMany('General_Budget');
    }
}
