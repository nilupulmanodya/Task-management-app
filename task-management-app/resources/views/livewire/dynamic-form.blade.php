<div class="container">
    <form wire:submit.prevent="addNewOne" method="POST" wire:ignore.self>
        @csrf

        <input type="hidden" name="activity_id" value="{{ $activity_id }}">
            <div class="goal-label">
                <label for="titleInput">New Goal</label>
            </div>


            <div class="form-group">
                <label for="titleInput">Goal</label>
                <select class="form-control" name="goalName"
                    wire:model='goalIds' id="selectGoals">
                    <option selected value=''>Select an Goal</option>
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

 
    @include('livewire.actions-table')

<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal show" id="taskEditForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="addNewOne" method="POST" wire:ignore.self>
                @csrf
        
                <input type="hidden" name="activity_id" value="{{ $activity_id }}">
                    <div class="goal-label">
                        <label for="titleInput">New Goal</label>
                    </div>
        
        
                    <div class="form-group">
                        <label for="titleInput">Goal</label>
                        <select class="form-control" name="goalName"
                            wire:model='goalIds' id="selectGoals">
                            <option selected value=''>Select an Goal</option>
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
    
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
            document.getElementById('taskEditForm').style.display = 'block';
        });
    });

</script>
