<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use Livewire\Component;

class DashboardComponent extends Component
{
    protected $rows;
    public $items;

    public function __construct() {
        $this->rows = new Activity();
    }

    
    public function render()
    {
        $this->items = $this->getGoals();
        return view('livewire.dashboard-component');
    }


    public function getGoals()
    {
        return $this->rows->get();
    }

}
