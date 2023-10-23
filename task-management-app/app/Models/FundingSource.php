<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundingSource extends Model
{
    use HasFactory;

    protected $fillable = [
        'items',
        'units',
        'Unit_charges',
        'amounts',
        'activity_id'
    ];

    public function getByActivity($activity_id)
    {

        return$this->where('activity_id', '=' , $activity_id)->get();
    }
}
