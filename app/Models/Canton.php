<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    use HasFactory;
    protected $table = 'cantons';
    protected $fillable = [
        'cantones'
    ];

    public function province(){
        return $this->belongsTo(Province::class);
    }
}
