<div class="mx-2">
    <table class="table">
        <thead>
            <tr>
                <th class="th-header table-lable" colspan="5">Funding Sources</th>
            </tr>
            <tr>
                <th class="th-header">No</th>
                <th class="th-header">Item</th>
                <th class="th-header">Units</th>
                <th class="th-header">Unit Charge (Rs.)</th>
                <th class="th-header">Amount (Rs.)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $key => $item)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $item['items'] }}</td>
                    <td>{{ $item['units'] == 0 ? '' : $item['units'] }}</td>
                    <td>{{ $item['Unit_charges'] ? '' : $item['Unit_charges'] }}</td>
                    <td>{{ $item['amounts'] }}</td>
                </tr>
                @php
                    $totalPrice += $item['amounts'];
                @endphp
            @endforeach
            <tr>
                <th colspan="5">
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#rowAddModal" data-whatever="@mdo">Add New Record</button>
                </th>
            </tr>
            <tr>
                <td colspan="4" class="fulltotal">
                    <b> Total (Rs.)</b>
                </td>
                <td class="fulltotal">
                    {{ $totalPrice }}
                </td>
            </tr>
        </tbody>
    </table>



    <div class="modal fade" id="rowAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="addRow" id="rowDataForm" wire:ignore.self>
                        <div class="form-group">
                            <label for="item" class="col-form-label">Item:</label>
                            <input type="text" class="form-control" id="item" name="item" wire:ignore
                                wire:model="newItem" placeholder="Enter the Item Name">
                            {{-- @error('newItem')
                                <label class="error">{{ $message }}</label>
                            @enderror --}}
                            @error('newItem')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="unit" class="col-form-label">Unit:</label>
                            <input type="number" class="form-control" id="unit" name="unit" wire:ignore
                                wire:model="newUnit" placeholder="Enter the Number Of Units">
                            @error('newUnit')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="unitCharge" class="col-form-label">Unit Charge:</label>
                            <input type="decimal" class="form-control" id="unitCharge" name="unitCharge" wire:ignore
                                wire:model="newUnitCharge" placeholder="Enter the Unit Charge">
                            @error('newUnitCharge')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="amount" class="col-form-label">Amount:</label>
                            <input type="decimal" class="form-control" id="amount" name="amount"
                                wire:model="newAmount" placeholder="Enter the Amount" value="{{ $newAmount }}">
                            {{-- @error('newAmount')
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



{{-- <script>

// $('#rowAddModal').on('show.bs.modal', function (event) {
//   var button = $(event.relatedTarget)
//   var recipient = button.data('whatever')
//   var modal = $(this)
//   modal.find('.modal-title').text('New message to ' + recipient)
//   modal.find('.modal-body input').val(recipient)
// })

// $('#rowDataForm').on('mouseup', function (event) {
//   // $('#rowAdding').prop("disabled", true);

// })

</script> --}}
