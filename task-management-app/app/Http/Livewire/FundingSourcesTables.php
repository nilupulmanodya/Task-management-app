<?php

namespace App\Http\Livewire;

use App\Models\FundingSource;
use Livewire\Component;

class FundingSourcesTables extends Component
{
    protected $rows;
    public $activity_id,$items;
    public $newItem;
    public $newUnit;
    public $newUnitCharge;
    public $newAmount;
    public $input;
    public $totalPrice = 0;

    public function __construct() {
        $this->rows = new FundingSource();
    }

    
    protected $rules = [
        'newItem' => 'required|max:255',
        'newUnit' => 'required|max:255',
        'newUnitCharge' => 'required|numeric',
        'newAmount' => 'required|numeric',
    ];

    protected $messages = [
        'newItem' => 'Item',
        'newUnit' => 'Unit',
        'newUnitCharge' => 'Unit Charge',
        'newAmount' => 'Amount',
    ];

    public function mount(){

    }
    public function render()
    {
        $this->newAmount = (((float)$this->newUnit)&&((float)$this->newUnitCharge))?((float)$this->newUnit)*((float)$this->newUnitCharge):$this->newAmount;
        $this->items = $this->getTableData();
        return view('livewire.funding-sources-tables');
    }


    public function getTableData()
    {
        return $this->rows->getByActivity($this->activity_id);
    }


    public function addRow()
    {

        $this->validate();

        
            $this->input['items'] = $this->newItem;
            $this->input['units'] = $this->newUnit;
            $this->input['Unit_charges'] = $this->newUnitCharge;
            $this->input['amounts'] = ($this->newAmount)?($this->newAmount):(($this->newUnit)*($this->newUnitCharge));
            $this->input['activity_id'] = $this->activity_id;
        


        $this->rows->create($this->input);

        $this->newItem = '';
        $this->newUnit = null;
        $this->newUnitCharge = null;
        $this->newAmount = null;
    }


}
