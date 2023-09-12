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

    public function render()
    {
        return view('livewire.dynamic-form');
    }
}


