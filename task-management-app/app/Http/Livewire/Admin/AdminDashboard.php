<?php

namespace App\Http\Livewire\Admin;

use App\Models\Activity;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;

class AdminDashboard extends Component
{

    protected $rows;
    public $items;

    public function __construct() {
        $this->rows = new Activity();
    }

    
    public function render()
    {
        $this->items = $this->getGoals();
        return view('livewire.admin.admin-dashboard');
    }


    public function getGoals()
    {
        return $this->rows->get();
    }

}
