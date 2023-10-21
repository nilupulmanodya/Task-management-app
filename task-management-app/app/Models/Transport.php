<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $fillable = [
        'transport',
        'no_of_vehicles',
        'toal_km',
        'unit_cost',
        'total',
        'activity_id'
    ];
    public function getByActivity($activity_id)
    {

        return$this->where('activity_id', '=' , $activity_id)->get();
    }
}
