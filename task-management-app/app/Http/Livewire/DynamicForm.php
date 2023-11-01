<?php

namespace App\Http\Livewire;

use App\Models\Goal;
use App\Models\Objective;
use App\Models\Strategy;
use App\Models\Action;
use App\Models\SubAction;
use Livewire\Component;

class DynamicForm extends Component
{
    protected $goal, $strategy;
    public $inputCount = 1;
    public $activity_id, $allGoals, $allObjectives, $allStrategies, $allActions, $allSubActions;
    public $goalIds = [], $objectiveIds = [], $strategyIds = [], $actionIds = [], $subActionIds = [];
    // protected $listeners = ['goalSelected' => 'handleGoalSelected'];

    public function __construct() {
        $this->goal = new Goal();
        $this->objective = new Objective();
        $this->strategy = new Strategy();
        $this->action = new Action();
        $this->subaction = new SubAction();

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
        $this->activity_id;
        $this->allGoals = $this->getGoals();

        if($this->inputCount && array_key_exists($this->inputCount,$this->goalIds))
        {
            // dd($this->goalIds);
            $this->allObjectives = ($this->goalIds[$this->inputCount])?($this->getObjectives()):null;
        //    $this->allStrategies = ($this->objectiveIds[$this->inputCount])?($this->getStrategies()):null;
            // $this->allActions = ($this->strategyIds[$this->inputCount])?($this->getActions()):null;
            // $this->allSubActions = ($this->actionIds[$this->inputCount])?($this->getSubActions()):null;

            // $this->allStrategies = ($this->objectiveIds && array_key_exists($this->objectiveIds[$this->inputCount]))?($this->getStrategies()):null;
            // $this->allActions = (array_key_exists($this->strategyIds[$this->inputCount]))?($this->getActions()):null;
            // $this->allSubActions = (array_key_exists($this->actionIds[$this->inputCount]))?($this->getSubActions()):null;


        if ($this->inputCount && array_key_exists($this->inputCount,$this->objectiveIds) ){
            $this->allStrategies = ($this->objectiveIds[$this->inputCount]) ? $this->getStrategies() : null;
        }
        if ($this->inputCount && array_key_exists($this->inputCount,$this->strategyIds) ){
            $this->allActions = ($this->strategyIds[$this->inputCount])?($this->getActions()):null;
        }
        if ($this->inputCount && array_key_exists($this->inputCount,$this->actionIds)) {
            $this->allSubActions = ($this->actionIds[$this->inputCount])?($this->getSubActions()):null;
        }
    }
        return view('livewire.dynamic-form');
    }


    public function getGoals()
    {
        return $this->goal->get();
    }

    public function getObjectives(){
        $selectedGoal = $this->goal->find($this->goalIds[$this->inputCount]);
        // dd($selectedGoal[0]->objectives);
        return $selectedGoal[0]->objectives;
    }

    public function getStrategies(){
        // dd()
        $selectedObjective = $this->objective->find($this->objectiveIds[$this->inputCount]);
        // dd($selectedObjective);
        return $selectedObjective[0]->strategies;
    }

    public function getActions(){
        $selectedAction = $this->strategy->find($this->strategyIds[$this->inputCount]);
        return  $selectedAction[0]->actions;
    }

    public function getSubActions(){
        $selectedSubAction = $this->action->find($this->actionIds[$this->inputCount]);
        return  $selectedSubAction[0]->subactions;
    }

}


