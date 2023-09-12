<?php

namespace App\Http\Livewire;

use App\Models\FundingSource;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Column;

class FundingSources extends LivewireDatatable
{
    public $model = FundingSource::class;
    public $hideable = 'select';
    public $exportable = true;

    public function columns()
    {
        return [
        NumberColumn::name('id')->label('ID')->searchable()->sortBy('id'),
            Column::callback(['items'], function ($item) {
                return  $item;
            })->searchable()->label('name'),
            Column::callback(['units'], function ($units) {
                return $units ;
            })->label('Status')
     
        ];
    }
}