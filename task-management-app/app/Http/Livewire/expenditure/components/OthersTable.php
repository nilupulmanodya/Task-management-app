<?php

namespace App\Http\Livewire\Expenditure\Components;

use App\Models\Other;

use Livewire\Component;

class OthersTable extends Component
{

    protected $others;
    public $totalPrice = 0;
    public $othersItems, $activity_id;
    public $newOthers, $newQuantity, $newOthersHours, $newOthersCost, $newOthersTotal;
    public $otherTotal, $allOthers;
    protected $rules = [
        'newOthers' => 'required', 
        'newQuantity' => 'required|numeric', 
        'newOthersHours' => 'required|numeric', 
        'newOthersCost' => 'required|numeric', 
        'newOthersTotal' => 'required|numeric',
    ];

    public function __construct()
    {
        $this->others = new Other();
    }
    public function render()
    {
        $this->newOthersTotal = (((float)$this->newQuantity)&&((float)$this->newOthersHours)&&((float)$this->newOthersCost))?(((float)$this->newQuantity)*((float)$this->newOthersHours)*((float)$this->newOthersCost)):$this->newOthersTotal;
        $this->othersItems = $this->getOthersData();
        $this->getTotal();
        $this->emit('updateOthers', $this->otherTotal);
        return view('livewire.expenditure.components.others-table');
    }
    public function getTotal()
    {
        $this->otherTotal = 0;

        foreach ($this->allOthers as $value) {
            $this->otherTotal += $value['total'];
        }

    }
    public function getOthersData()
    {
        $this->allOthers = $this->others->getByActivity($this->activity_id);
        return $this->allOthers;
    }

    public function addOthersRow()
    {
        $this->validate();

        
            $input['others'] = $this->newOthers;
            $input['quantity'] = $this->newQuantity;
            $input['No_of_hours'] = $this->newOthersHours;
            $input['unit_cost'] = $this->newOthersCost;
            $input['total'] = ($this->newOthersTotal)?($this->newOthersTotal):(($this->newQuantity)*($this->newOthersHours)*($this->newOthersCost));
            $input['activity_id'] = $this->activity_id;
        


        $this->others->create($input);

        $this->newOthers = '';
        $this->newQuantity = null;
        $this->newOthersHours = null;
        $this->newOthersCost = null;
        $this->newOthersTotal = null;
    }

    public function deleteOther($id){
        $other = $this->others->find($id);
        $other->delete();
    }
}
