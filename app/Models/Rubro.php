<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    use HasFactory;

    protected $table = 'rubros';

    protected $fillable = [
        'rubro',
        'category'
    ];

    public function getRubro()
    {
        return $this->rubro;
    }

    public function getCategory()
    {
        return $this->category;
    }

}
