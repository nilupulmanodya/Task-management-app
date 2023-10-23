<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    use HasFactory;

    protected $fillable = [
        'others',
        'quantity',
        'No_of_hours',
        'unit_cost',
        'total',
        'activity_id'
    ];
    public function getByActivity($activity_id)
    {

        return$this->where('activity_id', '=' , $activity_id)->get();
    }
}
