<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        @include('includes.css')
        @include('includes.js')
        
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-5 pb-2">
                {{-- @dump($activity_id) --}}
                <livewire:funding-sources-tables :activity_id="$activity_id"/>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-5 pb-2">
                <div class="mx-2">
                    <livewire:expenditure.components.transport-table :activity_id="$activity_id"/>
                    <livewire:expenditure.components.subsistance-table :activity_id="$activity_id"/>
                    <livewire:expenditure.components.others-table :activity_id="$activity_id"/>
                    <livewire:expenditure.components.table-total :activity_id="$activity_id"/>
                </div>
                {{-- <livewire:expenditure.components.expenditure-details-table /> --}}
            </div>
        </div>
    </div>
</x-app-layout>
