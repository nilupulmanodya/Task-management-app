<div>
    <div class="mx-3 my-3">

        <table>
          <tr>
            <th rowspan="2">name of event</th>
            <th rowspan="2">Goal</th>
            <th rowspan="2">Objective</th>
            <th rowspan="2">Stratergy</th>
            <th rowspan="2">Action</th>
            <th rowspan="2">Sub Action</th>
            <th rowspan="2">Responsible</th>
            <th colspan="2">Date</th>
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
            <td>{{ $item->activity_title }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          @endforeach
        
        </table>
        
        </div>
        
</div>
