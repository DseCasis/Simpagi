<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentProject extends Model
{
    use HasFactory;

    protected $table = 'investment_projects';
    protected $fillable = [
        'name'
    ];

    public function fondo(){
        return $this->belongsTo(Funding::class);
    }
}
