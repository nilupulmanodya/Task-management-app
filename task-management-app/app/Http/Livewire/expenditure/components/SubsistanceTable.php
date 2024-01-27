<?php

namespace App\Http\Livewire\Expenditure\Components;

use App\Models\Subsistance;

use Livewire\Component;

class SubsistanceTable extends Component
{

    protected $subsistance;
    public $totalPrice = 0;
    public $subsistanceItems, $activity_id;
    public $newSubsistance, $newPersons, $newSubsistanceHours,$newSubsistanceCosts,$newSubsistanceTotal;
    public $subsistanceTotal, $allSubsistance;
    protected $rules = [
        'newSubsistance' => 'required', 
        'newPersons' => 'required|numeric', 
        'newSubsistanceHours' => 'required|numeric',
        'newSubsistanceCosts' => 'required|numeric',
        'newSubsistanceTotal' => 'required|numeric',
    ];

    public function __construct()
   {
        $this->subsistance = new Subsistance();
   }

    public function render()
    {
        $this->newSubsistanceTotal = (((float)$this->newPersons)&&((float)$this->newSubsistanceHours)&&((float)$this->newSubsistanceCosts))?(((float)$this->newPersons)*((float)$this->newSubsistanceHours)*((float)$this->newSubsistanceCosts)):$this->newSubsistanceTotal;
        $this->subsistanceItems = $this->getSubsistenceData();
        $this->getTotal();
        $this->emit('updateSubsistance', $this->subsistanceTotal);
        return view('livewire.expenditure.components.subsistance-table');
    }
    public function getTotal()
    {
        $this->subsistanceTotal = 0;

        foreach ($this->allSubsistance as $value) {
            $this->subsistanceTotal += $value['total'];
        }

    }
    public function getSubsistenceData()
    {
        $this->allSubsistance = $this->subsistance->getByActivity($this->activity_id);
        return $this->allSubsistance;
    }
    public function addSubsistanceRow()
    {
        $this->validate();

        
            $input['subsistance'] = $this->newSubsistance;
            $input['no_of_persons'] = $this->newPersons;
            $input['No_of_hours'] = $this->newSubsistanceHours;
            $input['unit_cost'] = $this->newSubsistanceCosts;
            $input['total'] = ($this->newSubsistanceTotal)?($this->newSubsistanceTotal):(($this->newPersons)*($this->newSubsistanceHours)*($this->newSubsistanceCosts));
            $input['activity_id'] = $this->activity_id;
        


        $this->subsistance->create($input);

        $this->newSubsistance = '';
        $this->newPersons = null;
        $this->newSubsistanceHours = null;
        $this->newSubsistanceCosts = null;
        $this->newSubsistanceTotal = null;
    }

    public function deleteSubsisitace($id){
        $subsistance = $this->subsistance->find($id);
        $subsistance->delete();
    }
}
