<div class="container">
    <form action="{{route('activity.goal.store')}}" method="POST">
        @csrf
        <input type="hidden" name="activity_id" value="{{ $activity_id }}">
        @for($i = 1; $i <= $inputCount; $i++)
        <input type="hidden" name="itr" value="{{ $i }}">
        
                <label for="titleInput">Goal {{$i}}</label>
                    <div class="form-group">
                <label for="titleInput">Goal</label>
                        <select class="form-control"  name="goalName-{{ $i }}" id="">
                            @foreach ($allGoals as $goal)
                            <option value="{{ $goal->id }}" wire:model='{{ $goal->id }}'>{{ $goal->name }}</option>
                            @endforeach

            
                        </select>
                    </div>
                    <div class="form-group">
                <label for="titleInput">Objective</label>
            
                        <select class="form-control" name="GoalObjective-{{ $i }}" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <label for="titleInput">Action</label>
            
                    <div class="form-group">
                        <select class="form-control" name="GoalAction-{{ $i }}" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <label for="titleInput">Sub-action</label>
            
                    <div class="form-group">
                        <select class="form-control" name="goalSubAction-{{ $i }}" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <label for="titleInput">Sub Activity</label>
             
                    <div class="form-group">
                        <select class="form-control" name="GoalSubActivity-{{ $i }}" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
        @endfor
        <div class="form-group">
            <button type="button" wire:click="addInput" class="btn btn-primary new-goal">Add</button>
        </div>

    <button type="submit" class="btn btn-primary new-goal">submit</button>
    </form>

</div>

