<?php

namespace App\Http\Livewire\Edit;

use Livewire\Component;

class EditDashboardActivities extends Component
{

    public $added_title,$added_name,$added_start_date,$added_end_date;
    public function render()
    {
        return view('livewire.edit.edit-dashboard-activities');
    }

    public function getSelectedActivity($activity_id){
        dd($activity_id);
    }
}
