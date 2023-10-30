<div class="container">
    <form action="{{ route('activity.goal.store') }}" method="POST" wire:ignore.self>
        @csrf

        <input type="hidden" name="activity_id" value="{{ $activity_id }}">
        @for ($i = 1; $i <= $inputCount; $i++)
            @php
                $index = $i;
            @endphp
            <input type="hidden" name="itr" value="{{ $i }}">

            <div class="goal-label">
                <label for="titleInput" style="color:white; ">Goal {{ $i }}</label>
            </div>


            <div class="form-group">
                {{-- @dump($goalIds, $objectiveIds, $strategyIds, $actionIds, $subActionIds) --}}
                <label for="titleInput">Goal</label>
                <select class="form-control" name="goalName-{{ $i }}"
                    wire:model='goalIds.{{ $i }}.' id="selectGoals-{{ $i }}">
                    <option selected value=''>Select an Goal</option>
                    @foreach ($allGoals as $goal)
                        <option value="{{ $goal->id }}">{{ $goal->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="titleInput">Objective</label>
                {{-- @dump($i) --}}
                <select class="form-control" name="GoalObjective-{{ $index }}"
                    wire:model='objectiveIds.{{ $index }}.' id="selectObjectives-{{ $i }}">
                    <option selected value=''>Select an Objective</option>
                    @if ($allObjectives)
                        @foreach ($allObjectives as $objective)
                            <option value="{{ $objective->id }}">{{ $objective->name }}</option>
                        @endforeach
                    @endif

                </select>
            </div>

            <div class="form-group">
                <label for="titleInput">Strategy</label>

                <select class="form-control" name="objectiveStrategy-{{ $i }}"
                    wire:model='strategyIds.{{ $i }}.' id="selectStrategy-{{ $i }}">
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

                <select class="form-control" name="StrategyAction-{{ $i }}"
                    wire:model='actionIds.{{ $i }}.' id="selectActions-{{ $i }}">
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
                <select class="form-control" name="actionSubAction-{{ $i }}"
                    wire:model='subActionIds.{{ $i }}.' id="selectSubActions-{{ $i }}">
                    <option selected value=''>Select a Sub-Action</option>
                    @if ($allSubActions)
                        @foreach ($allSubActions as $subaction)
                            <option value="{{ $subaction->id }}">{{ $subaction->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>

        @endfor
        <div class="form-group">
            <button type="button" wire:click="addInput" class="btn btn-primary new-goal">Add New</button>
        </div>

        <button type="submit" class="btn btn-primary new-goal">Next</button>
    </form>

</div>
