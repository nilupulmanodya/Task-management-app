<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Action extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'action_id'
    ];

    public function subactions(): HasMany
    {
        return $this->hasMany(SubAction::class, 'action_id', 'id');
    }
}
