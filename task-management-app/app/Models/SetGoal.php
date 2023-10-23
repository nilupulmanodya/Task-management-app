<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


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



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subActions(): HasOne
    {
        return $this->hasOne(SubAction::class, 'id', 'sub_action_id');
    }


}
