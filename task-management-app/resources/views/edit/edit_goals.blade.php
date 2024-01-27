<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actions') }}
        </h2>


    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @include('includes.css')
                    {{-- @dump($activity_id) --}}
                <livewire:edit.edit-dashboard-actvities :activity_id = "$activity_id"/>
            </div>
        </div>
    </div>
</x-app-layout>
