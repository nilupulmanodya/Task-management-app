<?php

namespace App\Http\Livewire;

use App\Models\Goal;
use Livewire\Component;

class DynamicForm extends Component
{
    protected $goal;
    public $inputCount = 1;
    public $activity_id, $allGoals;

    public function __construct() {
        $this->goal = new Goal();
    }

    public function addInput()
    {
        $this->inputCount++;
    }
    public function mount(){
        $this->activity_id;
    } 

    public function render()
    {
        // dd($this->activity_id);
        $this->activity_id;
        $this->allGoals = $this->getGoals();

        return view('livewire.dynamic-form');
    }


    public function getGoals()
    {
        return $this->goal->get();
    }

}


