<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Collection;

class SetGoal extends Model
{
    use HasFactory;

    protected $fillable = [
        'goal_id',
        'objective_id',
        'strategy_id',
        'action_id',
        'sub_action_id',
        'sub_activity_id',
        'activity_id'
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function goal()
    {
        return $this->hasOne(Goal::class, 'id', 'goal_id');

    }

    public function objective()
    {
        return $this->hasOne(Objective::class, 'id', 'objective_id');

    }
    public function strategy()
    {
        return $this->hasOne(Strategy::class, 'id', 'strategy_id');

    }
    public function action()
    {
        return $this->hasOne(Action::class, 'id', 'action_id');
    }

    public function subAction()
    {
        return $this->hasOne(subAction::class, 'id', 'sub_action_id');
    }

    public function getByActivityId($activity_id) : Collection
    {
        return $this->where('activity_id', $activity_id)->get();
    }


}
