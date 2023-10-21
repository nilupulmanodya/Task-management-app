<?php

namespace App\Http\Livewire\Expenditure\Components;

use App\Models\Transport;
use Livewire\Component;

class TransportTable extends Component
{

    protected $transports;
    public $totalPrice = 0;
    public $transportItems, $activity_id;
    public $newTransport, $newVehicle, $newTotalKm, $newUnitCost, $newTransportTotal;
    public $transportTotal, $allTransport;

    protected $rules = [
        'newTransport' => 'required', 
        'newVehicle' => 'required|numeric', 
        'newTotalKm' => 'required|numeric', 
        'newUnitCost' => 'required|numeric',
        'newTransportTotal' => 'required|numeric',
    ];
   public function __construct()
   {
        $this->transports = new Transport();
   }

   public function render()
   {
    $this->newTransportTotal = (((float)$this->newVehicle)&&((float)$this->newTotalKm)&&((float)$this->newUnitCost))?(((float)$this->newVehicle)*((float)$this->newTotalKm)*((float)$this->newUnitCost)):$this->newTransportTotal;
    $this->transportItems = $this->getTransportData();
    $this->getTotal();
    $this->emit('updateTransport', $this->transportTotal);
    return view('livewire.expenditure.components.transport-table');
   }
   public function getTransportData()
    {
        $this->allTransport = $this->transports->getByActivity($this->activity_id);
        return $this->allTransport;
    }
    public function getTotal()
    {
        $this->transportTotal = 0;

        foreach ($this->allTransport as $value) {
            $this->transportTotal += $value['total'];
        }

    }
    public function addTransportRow()
    {
        $this->validate();

        
            $input['transport'] = $this->newTransport;
            $input['no_of_vehicles'] = $this->newVehicle;
            $input['toal_km'] = $this->newTotalKm;
            $input['unit_cost'] = $this->newUnitCost;
            $input['total'] = ($this->newTransportTotal)?($this->newTransportTotal):(($this->newVehicle)*($this->newTotalKm)*($this->newUnitCost));
            $input['activity_id'] = $this->activity_id;
        


        $this->transports->create($input);

        $this->newTransport = '';
        $this->newVehicle = null;
        $this->newTotalKm = null;
        $this->newUnitCost = null;
        $this->newTransportTotal = null;
    }

}
