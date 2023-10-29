<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use App\Models\SetGoal;
use Livewire\Component;

class DashboardComponent extends Component
{
    protected $rows,$setgoal;
    public $items, $goalModalData ,$goalTitle, $goalobj;

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

}
