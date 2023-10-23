<?php

namespace App\Http\Livewire;

use App\Models\Goal;
use App\Models\Strategy;
use Livewire\Component;

class DynamicForm extends Component
{
    protected $goal, $stratergy;
    public $inputCount = 1;
    public $activity_id, $allGoals, $allStratergies;

    public function __construct() {
        $this->goal = new Goal();
        $this->stratergy = new Strategy();
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
        $goals = $this->goal->get();

        $this->allStratergies = $this->goal->strategies;
    }

    public function getObjectives()
    {
        return $this->allGoals->objectives;
    }

}


