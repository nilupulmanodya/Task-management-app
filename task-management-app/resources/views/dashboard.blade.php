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
                <a href="{{ route('addUser') }}" class="btn btn-success">Add User</a>
            </div>
            <div class="row ">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <livewire:admin.admin-dashboard/>
                </div>
            </div>
        </div>
    </div> 
</x-app-layout>
@elseif(auth()->user()->user_type)

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
        
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row my-3 justify-content-end">
                <a href="{{ route('activity.action.form') }}" class="btn btn-success">Add Action</a>
            </div>
            <div class="row ">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <livewire:dashboard-component/>
                    {{-- @include('components.activity_info_form') --}}
                </div>
            </div>
        </div>
    </div> 
</x-app-layout>
@endif
