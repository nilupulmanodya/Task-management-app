@if (auth()->user()->user_type)
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
        
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row my-3 justify-content-end">
                
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <livewire:admin.add-users/>
            </div>
        </div>
    </div> 
</x-app-layout>
@endif