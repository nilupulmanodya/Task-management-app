<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DynamicForm extends Component
{
    public $inputCount = 1;
    public $activity_id;

    public function addInput()
    {
        $this->inputCount++;
    }
    public function mount(){
        $this->activity_id;
    } 

    public function render()
    {
        // dd($this->activity_id);
        $this->activity_id;

        return view('livewire.dynamic-form');
    }
}


