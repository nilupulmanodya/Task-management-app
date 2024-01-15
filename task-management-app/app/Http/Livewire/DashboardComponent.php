<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use App\Models\SetGoal;
use Livewire\Component;

class DashboardComponent extends Component
{
    protected $rows,$setgoal;
    public $items, $goalModalData ,$goalTitle, $goalobj;
    public $editGoalId, $editobjectiveId, $editStryategyId, $editActionId, $editSubActionId;

    public function __construct() {
        $this->rows = new Activity();
        $this->setgoal = new SetGoal();
    }

    public function mount()
    {
        $this->goalModalData;
    }


    public function render()
    {
        $this->goalModalData;
        $this->items = $this->getActivities();
        return view('livewire.dashboard-component',['goalModalData'=>$this->goalModalData]);
    }


    public function getActivities()
    {
        return $this->rows->get();
    }

    public function selectItem($id)
    {
        $this->goalModalData = $this->rows->find($id);

        do{
            // Add a short delay to avoid excessive resource usage
            usleep(200000); // 100000 microseconds = 0.1 seconds
            // Fetch the value again

        }while ($this->goalModalData === null);
        $this->emit('itemSelected');

    }

    public function deletePlan($rowId)
    {
        $activity = $this->rows->find($rowId);
        $activity->delete();
        $this->closeDropdown();
    }

    public function closeDropdown()
    {
        // Emit a Livewire event to close the dropdown
        $this->emit('closeDropdown');
    }

    public function openEditForm($rowId)
    {
        dd($rowId);
        // $this->editGoalId = $this->set_goal->find($goalIndex)->goal['id'];
        // $this->editobjectiveId = $this->set_goal->find($goalIndex)->goal['name'];
        // $this->editStryategyId = $this->set_goal->find($goalIndex)->goal['name'];
        // $this->editActionId = $this->set_goal->find($goalIndex)->goal['name'];
        // $this->editSubActionId = $this->set_goal->find($goalIndex)->goal['name'];
        

        
        // Emit a Livewire event to open the dropdown
        $this->emit('openEditForm');
    }

    public function editExistingOne(){

    }

}
