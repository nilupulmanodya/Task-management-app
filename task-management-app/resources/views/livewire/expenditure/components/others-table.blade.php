<div> 
<table class="table" style="margin-block-start:auto;">  
<tr>
    <th class="th-header">No</th>
    <th class="th-header">Others</th>
    <th class="th-header">Quantity</th>
    <th class="th-header">No. of Hours</th>
    <th class="th-header">Unit Cost</th>
    <th class="th-header">Total (Rs.)</th>
</tr>
<tbody>
@foreach ($othersItems as $key=>$item)
    <tr>
        <td>{{ $key }}</td>
        <td>{{ $item['others'] }}</td>
        <td>{{ $item['quantity'] }}</td>
        <td>{{$item['No_of_hours']}}</td>
        <td>{{ $item['unit_cost'] }}</td>
        <td>{{ $item['total'] }}</td>         
        </tr> 
        @php
          $totalPrice +=  $item['total'];
        @endphp      
    @endforeach
    <tr>
        <td colspan="6" >
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#rowAddModal3" data-whatever="@mdo">Add New Transport</button>
        </td>
    </tr>
    <tr>
      <td colspan="5">
        Total
      </td>
      <td>
        {{ $totalPrice }}
      </td>
    </tr>
</tbody>
</table>



<div class="modal fade" id="rowAddModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Other Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="addOthersRow" id="rowDataForm" wire:ignore.self>
            <div class="form-group">
                <label for="item" class="col-form-label">Others:</label>
                <input type="text" class="form-control" id="item" name="item" wire:ignore wire:model="newOthers" placeholder="Enter the Item Name">
                @error('newOthers')
                <label class="error">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group">
                <label for="unit" class="col-form-label">Quantity:</label>
                <input type="number" class="form-control" id="unit" name="unit" wire:ignore wire:model="newQuantity" placeholder="Enter the Number Of Units">
                @error('newQuantity')
                <label class="error">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group">
                <label for="unitCharge" class="col-form-label">No. of Hours:</label>
                <input type="decimal" class="form-control" id="unitCharge" name="unitCharge" wire:ignore wire:model="newOthersHours" placeholder="Enter the Unit Charge">
                @error('newOthersHours')
                <label class="error">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group">
              <label for="unitCharge" class="col-form-label">Unit Cost:</label>
              <input type="decimal" class="form-control" id="unitCharge" name="unitCharge" wire:ignore wire:model="newOthersCost" placeholder="Enter the Unit Charge">
              @error('newOthersCost')
              <label class="error">{{ $message }}</label>
              @enderror
          </div>
          <div class="form-group">
            <label for="unitCharge" class="col-form-label">Total (Rs.):</label>
            <input type="decimal" class="form-control" id="unitCharge" name="unitCharge" wire:ignore wire:model="newOthersTotal" placeholder="Enter the Unit Charge">
            @error('newOthersTotal')
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