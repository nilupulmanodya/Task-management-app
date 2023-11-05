<?php

namespace App\Http\Livewire\Expenditure\Components;

use App\Models\Other;
use App\Models\Subsistance;
use App\Models\Transport;
use Livewire\Component;

class ExpenditureDetailsTable extends Component
{
    protected $transports,$subsistance, $others;
    public $transportItems, $subsistanceItems, $othersItems, $activity_id;
    public $newTransport, $newVehicle, $newTotalKm, $newUnitCost, $newTransportTotal;
    public $newSubsistance, $newPersons, $newSubsistanceHours,$newSubsistanceCosts,$newSubsistanceTotal;
    public $newOthers, $newQuantity, $newOthersHours, $newOthersCost, $newOthersTotal;


    protected $rules = [
        'newTransport' => 'required',
        'newVehicle' => 'required|numeric',
        'newTotalKm' => 'required|numeric',
        'newUnitCost' => 'required|numeric',
        'newTransportTotal' => 'required|numeric',
        'newSubsistance' => 'required',
        'newPersons' => 'required|numeric',
        'newSubsistanceHours' => 'required|numeric',
        'newSubsistanceCosts' => 'required|numeric',
        'newSubsistanceTotal' => 'required|numeric',
        'newOthers' => 'required',
        'newQuantity' => 'required|numeric',
        'newOthersHours' => 'required|numeric',
        'newOthersCost' => 'required|numeric',
        'newOthersTotal' => 'required|numeric',
    ];

    protected $messages = [
        'newItem' => 'Item',
        'newUnit' => 'Unit',
        'newUnitCharge' => 'Unit Charge',
        'newAmount' => 'Amount',
    ];

    public function __construct() {
        $this->transports = new Transport();
        $this->subsistance = new Subsistance();
        $this->others = new Other();
    }

    public function render()
    {
        $this->transportItems = $this->getTransportData();
        $this->subsistanceItems = $this->getSubsistenceData();
        $this->othersItems = $this->getOthersData();

        return view('livewire.expenditure.components.expenditure-details-table');
    }


    public function getTransportData()
    {
        return $this->transports->getByActivity($this->activity_id);
    }
    public function getSubsistenceData()
    {
        return $this->subsistance->getByActivity($this->activity_id);
    }
    public function getOthersData()
    {
        return $this->others->getByActivity($this->activity_id);
    }
}
