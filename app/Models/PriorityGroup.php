<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriorityGroup extends Model
{
    use HasFactory;

    protected $table = 'priority_groups';
    protected $fillable = [
        'grupo_prioritario',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
