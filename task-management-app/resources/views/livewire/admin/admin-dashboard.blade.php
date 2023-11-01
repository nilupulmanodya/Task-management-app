<div>
    <div class="mx-3 my-3">

        <table>
          <tr>
            <th rowspan="2">Name of Event</th>
            <th rowspan="2">Responsible</th>
            <th colspan="2">Date</th>
            <th rowspan="2">Status</th>
            <th rowspan="2">Completion(%)</th>
            <th rowspan="2">Evidences</th>
            <th rowspan="2">Remarks</th>
          </tr>
          <tr>
            <th>Planned</th>
            <th>Completed</th>
          </tr>
          @foreach ($items as $item)      
          <tr>
            <td><a cursor="pointer" wire:click="selectItem({{ $item->id }})">{{ $item->activity_title }}</a>
              <br>
              <a href="" class="btn btn-primary">Edit</a></td>
            <td>
              {{ $item->user->name}}
            </td>
            <td>{{ $item->start_date }}</td>
            <td>{{ $item->end_date }}</td>
            <td>
              <select name="status" id="">
                <option value="1">Planned</option>
                <option value="2">In Progress</option>
                <option value="3">Complete</option>
              </select>
            </td>
            <td>
            <input width="5" type="number" name="Completion" id="">
            </td>
            <td>
            <input type="file" name="fileInput" class="form-control-file" id="exampleFormControlFile1">
        
            </td>
            <td style="overflow-x: scroll;overflow-y: scroll;">
              <textarea  name="remarks" id="" cols="10" rows="10"></textarea>
            </td>
        
          </tr>
          @endforeach
        
        </table>
        
        </div>

        <div class="modal fade" id="ModalContent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Goal Contet.</h5>
                <button type="button" class="close" onclick="closeModal()" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="container">
                  @if ($goalModalData)
              
          
                  @foreach ($goalModalData->goals as $item)
                  <div>
                      <div class="py-2">
                        <p><strong>Goal Name:</strong> <span id="goalNameResult">{{ ($item->goal->name)??''}}</span></p>
                      </div>
                      <div class="py-2">
                        <p><strong>Objective:</strong> <span id="goalObjectiveResult">{{ ($item->objective->name)??''}}</span></p>
                      </div>
                      <div class="py-2">
                      {{-- <p><strong>Objective:</strong> <span id="goalObjectiveResult">{{ ($goalModalData->strategy->name)??''}}</span></p> --}}
                      </div>
                      <div class="py-2">
                        <p><strong>Action:</strong> <span id="goalActionResult">{{ ($item->action->name)??''}}</span></p>
                      </div>
                      <div class="py-2">
                        <p><strong>Sub-action:</strong> <span id="goalSubActionResult">{{ ($item->subAction->name)??''}}</span></p>
                        
                      </div>
                      <hr>
                  </div>
                  @endforeach
                  @endif
            </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal()" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        
</div>
<script>
  document.addEventListener('livewire:load', function () {
      Livewire.on('itemSelected', () => {
        Livewire.emit('render');
          document.getElementById('ModalContent').classList.add('show');
          document.getElementById('ModalContent').classList.remove('fade');
          document.getElementById('ModalContent').style.display = 'block';

          // You can call a method or just refresh the component
      });
  });

  function closeModal(){
    document.getElementById('ModalContent').classList.remove('show');
    document.getElementById('ModalContent').classList.add('fade');
    document.getElementById('ModalContent').style.display = 'none';
  }
</script>