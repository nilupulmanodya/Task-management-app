<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'activity_title',
        'responsible_person',
        'introduction',
        'start_date',
        'end_date',
        'file_path',
        'proposal_id',
        'user_id'
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }


    public function goals(): HasMany
    {
        return $this->hasMany(SetGoal::class, 'activity_id', 'id');
    }
}
