<?php

namespace App\Http\Livewire;

use App\Models\Goal;
use App\Models\Strategy;
use Livewire\Component;

class DynamicForm extends Component
{
    protected $goal, $stratergy;
    public $inputCount = 1;
    public $activity_id, $allGoals, $allObjectives, $goal_id, $objective_id;

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
        // dd($this->goal_id);
        $this->activity_id;
        $this->allGoals = $this->getGoals();
        // $this->allObjectives = $this->getObjectives();

        return view('livewire.dynamic-form');
    }


    public function getGoals()
    {
        // dd($this->goal->get());
        return $this->goal->get();
    }

    public function getObjectives()
    {
        $goal = $this->goal->find($this->goal_id);
        return $goal->objectives;
    }

}


