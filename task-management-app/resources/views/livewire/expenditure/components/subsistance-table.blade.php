<div>
    <table class="table" style="margin-block:auto;">
        <tbody>
            <tr>
                <th class="th-header">No</th>
                <th class="th-header">Subsistance</th>
                <th class="th-header">No. of Persons/Units</th>
                <th class="th-header">No. of Hours</th>
                <th class="th-header">Unit Cost</th>
                <th class="th-header">Total (Rs.)</th>
                <th class="th-header"></th>
            </tr>
            </tr>
            @foreach ($subsistanceItems as $key => $item)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $item['subsistance'] }}</td>
                    <td>{{ $item['no_of_persons'] }}</td>
                    <td>{{ $item['No_of_hours'] }}</td>
                    <td>{{ $item['unit_cost'] }}</td>
                    <td>{{ $item['total'] }}</td>
                    <td><div class="dropdown">
                        <a style="cursor:pointer;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- Add your setting icon here -->
                            <i class="fa fa-trash" style="color: red"></i>
                        </a>
                    </div>
                </td>
                </tr>
                @php
                    $totalPrice += $item['total'];
                @endphp
            @endforeach
            <tr>
                <td colspan="7">
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#rowAddModal2" data-whatever="@mdo">Add New Subsistance</button>
                </td>
            </tr>
            <tr>
                <td colspan="6" class="total-amount">
                    Total (Rs.)
                </td>
                <td class="total-amount">
                    {{ $subsistanceTotal }}
                </td>
            </tr>
        </tbody>
    </table>

    <div class="modal fade" id="rowAddModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Subsistance Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="addSubsistanceRow" id="rowDataForm" wire:ignore.self>
                        <div class="form-group">
                            <label for="item" class="col-form-label">Subsistance:</label>
                            <input type="text" class="form-control" id="item" name="item" wire:ignore
                                wire:model="newSubsistance" placeholder="Enter the Item Name">
                            @error('newSubsistance')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="unit" class="col-form-label">No. of Persons/Units:</label>
                            <input type="text" class="form-control" id="unit" name="unit" wire:ignore
                                wire:model="newPersons" placeholder="Enter the Number Of Units">
                            @error('newPersons')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="unitCharge" class="col-form-label">No. of Hours:</label>
                            <input type="decimal" class="form-control" id="unitCharge" name="unitCharge" wire:ignore
                                wire:model="newSubsistanceHours" placeholder="Enter the Unit Charge">
                            @error('newSubsistanceHours')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="unitCharge" class="col-form-label">Unit Cost:</label>
                            <input type="decimal" class="form-control" id="unitCharge" name="unitCharge" wire:ignore
                                wire:model="newSubsistanceCosts" placeholder="Enter the Unit Charge">
                            @error('newSubsistanceCosts')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="unitCharge" class="col-form-label">Total (Rs.):</label>
                            <input type="decimal" class="form-control" id="unitCharge" name="unitCharge" wire:ignore
                                wire:model="newSubsistanceTotal" placeholder="Enter the Unit Charge">
                            {{-- @error('newSubsistanceTotal')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror --}}
                        </div>
                        <br>
                        <button type="submit" id="rowAdding" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
