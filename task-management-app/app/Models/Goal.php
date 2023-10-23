<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];


    public function objectives()
    {
        return $this->hasMany(Objective::class, 'goal_id', 'id');
    }
}
