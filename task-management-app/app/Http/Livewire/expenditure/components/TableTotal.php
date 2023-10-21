<?php

namespace App\Http\Livewire\Expenditure\Components;

use Livewire\Component;

class TableTotal extends Component
{
    protected $listeners = ['updateTransport' => 'getTransportTotal', 'updateSubsistance' => 'getSubsistanceTotal', 'updateOthers' => 'getOtherTotal'];
    public $transportTotal, $subsistanceTotal, $otherTotal, $fullTotal;
    
    public function render()
    {
        
        $this->fullTotal = $this->calculateTotal();
        return view('livewire.expenditure.components.table-total');
    }

    public function getTransportTotal($total)
    {
        $this->transportTotal = $total;
        // dump($this->transportTotal);
        $this->calculateTotal();
    }
    public function getSubsistanceTotal($total)
    {
        $this->subsistanceTotal = $total;
        // dump($this->subsistanceTotal);
        $this->calculateTotal();

    }
    public function getOtherTotal($total)
    {
        $this->otherTotal = $total;
        // dump($this->otherTotal);
        $this->calculateTotal();

    }

    public function calculateTotal()
    {
        return (($this->transportTotal)+($this->subsistanceTotal)+($this->otherTotal));
    }
}
