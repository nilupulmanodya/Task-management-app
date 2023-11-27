<?php

namespace App\Http\Livewire;

use App\Models\Goal;
use App\Models\Objective;
use App\Models\Strategy;
use App\Models\Action;
use App\Models\SetGoal;
use App\Models\SubAction;
use Livewire\Component;

class DynamicForm extends Component
{
    protected $goal, $strategy, $objective, $action, $sub_action, $set_goal;
    public $inputCount = 1;
    public $activity_id, $allGoals, $allObjectives, $allStrategies, $allActions, $allSubActions;
    public $goalIds, $objectiveIds, $strategyIds, $actionIds, $subActionIds;
    public $addedActions;
    // protected $listeners = ['goalSelected' => 'handleGoalSelected'];

    public function __construct() {
        $this->goal = new Goal();
        $this->objective = new Objective();
        $this->strategy = new Strategy();
        $this->action = new Action();
        $this->sub_action = new SubAction();
        $this->set_goal = new SetGoal();

    }

    protected $rules = [
        'goalIds' => 'required',
        'objectiveIds' => 'required',
        'strategyIds' => 'required',
        'actionIds' => 'required',
        'subActionIds' => 'required'
        // ... add rules for other fields
    ];

    public function addNewOne()
    {
        $this->validate(); // This will automatically validate using the rules

        // dd($this->goalIds, $this->objectiveIds, $this->strategyIds, $this->actionIds, $this->subActionIds);
        $data['goal_id'] = $this->goalIds; 
        $data['objective_id'] = $this->objectiveIds; 
        $data['strategy_id'] = $this->strategyIds; 
        $data['action_id'] = $this->actionIds; 
        $data['sub_action_id'] = $this->subActionIds; 
        $data['activity_id'] = $this->activity_id;

        $this->set_goal->create($data);
        // Your form submission logic here

        // Clear form fields after successful submission
        $this->reset(['goalIds', 'objectiveIds', 'objectiveIds','strategyIds','actionIds','subActionIds']);
    }

    public function moveNext()
    {
        return redirect()->route('activity.table', ['activity_id' => $this->activity_id]);
    }

    

    public function mount(){
        $this->activity_id;
    }

    public function render()
    {
        $this->activity_id;
        $this->allGoals = $this->getGoals();

            // dd($this->goalIds);
            $this->allObjectives = ($this->goalIds)?($this->getObjectives()):null;
        //    $this->allStrategies = ($this->objectiveIds[$this->inputCount])?($this->getStrategies()):null;
            // $this->allActions = ($this->strategyIds[$this->inputCount])?($this->getActions()):null;
            // $this->allSubActions = ($this->actionIds[$this->inputCount])?($this->getSubActions()):null;

            // $this->allStrategies = ($this->objectiveIds && array_key_exists($this->objectiveIds[$this->inputCount]))?($this->getStrategies()):null;
            // $this->allActions = (array_key_exists($this->strategyIds[$this->inputCount]))?($this->getActions()):null;
            // $this->allSubActions = (array_key_exists($this->actionIds[$this->inputCount]))?($this->getSubActions()):null;

            $this->allStrategies = ($this->objectiveIds) ? $this->getStrategies() : null;
            $this->allActions = ($this->strategyIds)?($this->getActions()):null;
            $this->allSubActions = ($this->actionIds)?($this->getSubActions()):null;
            $this->addedActions = $this->getAddedActions();
        return view('livewire.dynamic-form');
    }


    public function getGoals()
    {
        return $this->goal->get();
    }

    public function getObjectives(){
        $selectedGoal = $this->goal->find($this->goalIds);
        // dd($selectedGoal);
        return $selectedGoal->objectives;
    }

    public function getStrategies(){
        // dd()
        $selectedObjective = $this->objective->find($this->objectiveIds);
        // dd($selectedObjective);
        return $selectedObjective->strategies;
    }

    public function getActions(){
        $selectedAction = $this->strategy->find($this->strategyIds);
        return  $selectedAction->actions;
    }

    public function getSubActions(){
        $selectedSubAction = $this->action->find($this->actionIds);
        return  $selectedSubAction->subactions;
    }

    
    public function getAddedActions(){
        // dump($this->set_goal->getByActivityId($this->activity_id));
        return $this->set_goal->getByActivityId($this->activity_id);
    }

    public function deleteActivity($activityId)
    {
        $this->set_goal->delete($activityId);
        $this->closeDropdown();
    }
    
    public function editSettings($set_goal_id)
    {
        dd($set_goal_id);
        $editedAction = $this->set_goal->find($set_goal_id);
        
        
        $this->closeDropdown();
        return array_merge();
    }
    
    public function closeDropdown()
    {
        // Emit a Livewire event to close the dropdown
        $this->emit('closeDropdown');
    }

    public function openEditForm()
    {
        
        // Emit a Livewire event to open the dropdown
        $this->emit('openEditForm');
    }

}


