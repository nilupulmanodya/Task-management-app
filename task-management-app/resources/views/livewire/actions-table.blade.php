<div>
    <table style='text-align:center width:100%;'>
        <tr>
            <th>Goals</th>
            <th>Strategys</th>
            <th>Objectives</th>
            <th>Sub Actions</th>
            <th>Actions</th>
            <th></th>
        </tr>

        @foreach ($addedActions as $action)
        <tr>
            <td>{{ $action->goal['name'] }}</td>
            <td>{{ $action->Strategy['name'] }}</td>
            <td>{{ $action->objective['name'] }}</td>
            <td>{{ $action->action['name'] }}</td>
            <td>{{ $action->subAction['name'] }}</td>
            <td><div class="dropdown">
                    <a style="cursor:pointer;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- Add your setting icon here -->
                        <i class="fa fa-cog"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" style="position: absolute; top: -1.5rem; left: -150px; right: 0;">
                        <a class="dropdown-item" wire:click="openEditForm({{ $action->id }})">Edit</a>
                        <a class="dropdown-item" wire:click="deleteActivity({{ $action->id }})">Delete</a>
                    
                    </div>
                </div>
            </td>

        </tr>
        @endforeach

    </table>



</div>
