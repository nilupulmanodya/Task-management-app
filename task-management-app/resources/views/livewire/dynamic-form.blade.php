<div class="container">
    <form wire:submit.prevent="addNewOne" method="POST" wire:ignore.self id="createForm">
        @csrf

        <input type="hidden" name="activity_id" value="{{ $activity_id }}">
            <div class="goal-label">
                <label for="titleInput">New Goal</label>
            </div>


            <div class="form-group">
                <label for="titleInput">Goal</label>
                <select class="form-control" name="goalName"
                    wire:model='goalIds' id="selectGoals">
                    <option selected value=''>Select a Goal</option>
                    @foreach ($allGoals as $goal)
                        <option value="{{ $goal->id }}">{{ $goal->name }}</option>
                    @endforeach
                </select>
                @error('goalIds') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="titleInput">Objective</label>
                <select class="form-control" name="GoalObjective"
                    wire:model='objectiveIds' id="selectObjectives">
                    <option selected value=''>Select an Objective</option>
                    @dump($allObjectives)
                    @if ($allObjectives)
                        @foreach ($allObjectives as $objective)
                            <option value="{{ $objective->id }}">{{ $objective->name }}</option>
                        @endforeach
                    @endif

                </select>
                @error('objectiveIds') <span class="error ">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="titleInput">Strategy</label>

                <select class="form-control" name="objectiveStrategy"
                    wire:model='strategyIds' id="selectStrategy">
                    <option selected value=''>Select a Strategy</option>
                    @if ($allStrategies)
                        @foreach ($allStrategies as $strategy)
                            <option value="{{ $strategy->id }}">{{ $strategy->name }}</option>
                        @endforeach
                    @endif

                </select>
            </div>


            <div class="form-group">
                <label for="titleInput">Action</label>

                <select class="form-control" name="StrategyAction"
                    wire:model='actionIds' id="selectActions">
                    <option selected value=''>Select an Action</option>
                    @if ($allActions)
                        @foreach ($allActions as $action)
                            <option value="{{ $action->id }}">{{ $action->name }}</option>
                        @endforeach
                    @endif

                </select>
            </div>


            <label for="titleInput">Sub-Action</label>

            <div class="form-group">
                <select class="form-control" name="actionSubAction"
                    wire:model='subActionIds' id="selectSubActions">
                    <option selected value=''>Select a Sub-Action</option>
                    @if ($allSubActions)
                        @foreach ($allSubActions as $subaction)
                            <option value="{{ $subaction->id }}">{{ $subaction->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>

        <div class="form-group">
            <button type="button" wire:click="moveNext" class="btn btn-primary new-goal">Next</button>
        </div>

        <button type="submit" class="btn btn-primary new-goal">Save This & Add New</button>
    </form>

    <div id="editForm" class="hidden">  
        <form wire:submit.prevent="editExistingOne" method="POST" wire:ignore.self >
            @csrf
            
            <input type="hidden" name="activity_id" value="{{ $activity_id }}">
            <div class="goal-label">
                <label for="titleInput">Edit Goal</label>
            </div>


            <div class="form-group">
                <label for="titleInput">Goal</label>
                <select class="form-control" name="goalName"
                wire:model='editGoalId'  id="selectGoals">
                @foreach ($allGoals as $goal)
                <option  value="{{ $goal->id == $editGoalId ? 'selected' : '' }}">{{ $goal->name }}</option>
                    @endforeach
                </select>
                @error('goalIds') <span class="error">{{ $message }}</span> @enderror
            </div>
            
            <div class="form-group">
                <label for="titleInput">Objective</label>
                <select class="form-control" name="GoalObjective"
                wire:model='editobjectiveId' id="selectObjectives">
                    {{-- <option selected value=''>Select an Objective</option> --}}
                    @if ($allObjectives)
                        @foreach ($allObjectives as $objective)
                            <option value="{{ $objective->id == $editobjectiveId ? 'selected' : '' }}">{{ $objective->name }}</option>
                        @endforeach
                    @endif

                </select>
                @error('objectiveIds') <span class="error ">{{ $message }}</span> @enderror
            </div>
            
            <div class="form-group">
                <label for="titleInput">Strategy</label>
                
                <select class="form-control" name="objectiveStrategy"
                wire:model='editStryategyId' id="selectStrategy">
                {{-- <option selected value=''>Select a Strategy</option> --}}
                @if ($allStrategies)
                @foreach ($allStrategies as $strategy)
                            <option value="{{ $strategy->id == $editStryategyId ? 'selected' : '' }}">{{ $strategy->name }}</option>
                        @endforeach
                    @endif

                </select>
            </div>


            <div class="form-group">
                <label for="titleInput">Action</label>
                
                <select class="form-control" name="StrategyAction"
                    wire:model='editActionId' id="selectActions">
                    {{-- <option selected value=''>Select an Action</option> --}}
                    @if ($allActions)
                        @foreach ($allActions as $action)
                            <option value="{{ $action->id == $editActionId ? 'selected' : '' }}">{{ $action->name }}</option>
                            @endforeach
                            @endif
                            
                </select>
            </div>


            <label for="titleInput">Sub-Action</label>
            
            <div class="form-group">
                <select class="form-control" name="actionSubAction"
                wire:model='editSubActionId' id="selectSubActions">
                {{-- <option selected value=''>Select a Sub-Action</option> --}}
                @if ($allSubActions)
                        @foreach ($allSubActions as $subaction)
                            <option value="{{ $subaction->id == $editSubActionId ? 'selected' : '' }}">{{ $subaction->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>

        <div class="form-group">
            <button type="button" wire:click="moveNext" class="btn btn-primary new-goal">Next</button>
        </div>
        
        <button type="submit" class="btn btn-primary new-goal">Save This & Add New</button>
    </form>
</div>
    
 
    @include('livewire.actions-table')

<!-- Button trigger modal -->

  
  <!-- Modal -->


    
</div>


<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('closeDropdown', function () {
            $('.dropdown').removeClass('show');
        });
    });

    document.addEventListener('livewire:load', function () {
        Livewire.on('openEditForm', function () {
            console.log('hee');
            // document.getElementById('editForm').classList.remove('hidden');
            // document.getElementById('taskEditForm').classList.add('hidden');
            
        });
    });

    function closeModal(){
        document.getElementById('taskEditForm'). = 'none';
    }

</script>
