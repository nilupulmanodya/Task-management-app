<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetGoal extends Model
{
    use HasFactory;
    protected $fillable = [
        'goal_id',
        'objective_id',
        'action_id',
        'sub_action_id',
        'sub_activity_id',
        'activity_id'
    ];
}
