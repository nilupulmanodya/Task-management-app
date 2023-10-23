<div>
<table class="table" style="margin-block-end:auto;">
    <thead>
        <tr><th class="th-header" colspan="6">Expenditure Details</th></tr>
      <tr>
        <th class="th-header">No</th>
        <th class="th-header">Transport</th>
        <th class="th-header">No. of Vehicles</th>
        <th class="th-header">Total Km</th>
        <th class="th-header">Unit Cost</th>
        <th class="th-header">Total (Rs.)</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($transportItems as $key=>$item)
        <tr>
            <td>{{ $key }}</td>
            <td>{{ $item['transport'] }}</td>
            <td>{{ $item['no_of_vehicles'] }}</td>
            <td>{{$item['toal_km']}}</td>
            <td>{{ $item['unit_cost'] }}</td>
            <td>{{ $item['total'] }}</td>         
          </tr> 
          @php
                $totalPrice +=  $item['total'];
          @endphp      
        @endforeach
        <tr>
            <td colspan="6" >
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#rowAddModal1" data-whatever="@mdo">Add New Transport</button>
            </td>
        </tr>
        <tr>
          <td colspan="5">
            Total
          </td>
          <td>
            {{ $transportTotal }}
          </td>
        </tr>
    </tbody>
</table>
        
        <div class="modal fade" id="rowAddModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New Transport Item</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form wire:submit.prevent="addTransportRow" id="rowDataForm" wire:ignore.self>
                    <div class="form-group">
                        <label for="item" class="col-form-label">Transport:</label>
                        <input type="text" class="form-control" id="item" name="item" wire:ignore wire:model="newTransport" placeholder="Enter the Item Transport">
                        @error('newTransport')
                        <label class="error">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="unit" class="col-form-label">No. of Vehicles:</label>
                        <input type="number" class="form-control" id="unit" name="unit" wire:ignore wire:model="newVehicle" placeholder="Enter the Number Of Units">
                        @error('newVehicle')
                        <label class="error">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="unitCharge" class="col-form-label">Total Km:</label>
                        <input type="number" class="form-control" id="unitCharge" name="unitCharge" wire:ignore wire:model="newTotalKm" placeholder="Enter the Total Km">
                        @error('newTotalKm')
                        <label class="error">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="unitCharge" class="col-form-label">Unit Cost:</label>
                      <input type="number" class="form-control" id="unitCharge" name="unitCharge" wire:ignore wire:model="newUnitCost" placeholder="Enter the Unit Charge">
                      @error('newUnitCost')
                      <label class="error">{{ $message }}</label>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="unitCharge" class="col-form-label">Total (Rs.):</label>
                    <input type="number" class="form-control" id="unitCharge" name="unitCharge" wire:ignore wire:model="newTransportTotal" placeholder="Enter the Unit Charge" value="{{ $newTransportTotal }}">
                    @error('newTransportTotal')
                    <label class="error">{{ $message }}</label>
                    @enderror
                </div>
                    <button type="submit" id="rowAdding"  class="btn btn-primary">Add Row</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>  
                </div>
              </div>
            </div>
          </div>
        </div>
          
          