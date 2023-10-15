
<div class="container pb-3">
  <h1>Task Designing Faculty Action Plan For Faculty Board</h1>
  
  <div class="section-1">

  <form action="{{ route('activity.store') }}" method="POST">
    @csrf
  <div class="form-group">
    <label for="titleInput">Title</label>
    <input type="text" class="form-control" name="titleInput" id="titleInput" aria-describedby="titleInput" placeholder="Enter the Title">
    <!-- <small id="titleHelp" class="form-text text-muted">We'll never share your title with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="nameInput">Name</label>
    <input type="text" class="form-control" id="nameInput" name="nameInput" aria-describedby="nameInput" placeholder="John Doe">
    <small id="nameHelp" class="form-text text-muted">Name of the responsible person for particular inquery.</small>
  </div>

  <!-- Action Plan Date picker -->
  <div class="form-group date-picker-container">
    <label class="form-check-label" for="exampleCheck1">Action plan</label>
    <div class="row">
      <div class="col">
        <input type="text" id="startDate" name="startDate" class="date form-control" placeholder="Start Date">
      </div>
      <div class="col">
        <input type="text" id="endDate" name="endDate" class="date form-control" placeholder="End date">
      </div>
    </div>
  </div>

  <!-- ToDO : forms Goal Section should goes here -->

  <p>Todo Goals Section will goes here</p>

  <!-- Section introduction -->
  <div class="form-group">
    <label for="introductionFormControlTextarea1">Introduction</label>
    <textarea class="form-control" name="introInput" id="introductionFormControlTextarea1" rows="3"></textarea>
  </div>

  <!-- Section upload proposal -->
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" name="fileInput" class="form-control-file" id="exampleFormControlFile1">
  </div>



  <!-- ToDo : table 1 -->
  <!-- ToDo : table 2 -->





<!-- may be further need -->
  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->


   <button type="submit" class="btn btn-success">Submit</button> 
</form>
  </div>

  



  



  {{-- <table class="table">
    <caption>Expenditure Details</caption>
    <thead>
      <tr>
        <th class="th-header">Expenditure Details</th>
        <th class="th-header">No. of Vehicles</th>
        <th class="th-header">Total Km</th>
        <th class="th-header">Unit Cost</th>
        <th class="th-header">Total (Rs.)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Transport</td>
        <td>1 (University Bus)</td>
        <td>100</td>
        <td>45</td>
        <td>4,500.00</td>
      </tr>
      <tr>
        <td>Subsistence/ Accommodation</td>
        <td>1</td>
        <td>12</td>
        <td>30</td>
        <td>8,000.00</td>
      </tr>
      <tr>
        <td>Resource Persons (Lectures)</td>
        <td>3</td>
        <td>12</td>
        <td>1,500</td>
        <td>4,500.00</td>
      </tr>
      <tr>
        <td>Technical Assistants</td>
        <td>50</td>
        <td>2</td>
        <td>2,000</td>
        <td>100,000.00</td>
      </tr>
      <tr>
        <td>Others</td>
        <td>50</td>
        <td>3</td>
        <td>1,500</td>
        <td>225,000.00</td>
      </tr>
      <tr>
        <td>Meals and Refreshments</td>
        <td>2</td>
        <td>1</td>
        <td>30,000</td>
        <td>60,000.00</td>
      </tr>
      <tr>
        <td>Administrative Cost (Faculty Administration)</td>
        <td>4</td>
        <td>1</td>
        <td>15,000</td>
        <td>60,000.00</td>
      </tr>
      <tr>
        <td>Geo Tech-Hub Coordination</td>
        <td>5</td>
        <td>3</td>
        <td>800</td>
        <td>4,000.00</td>
      </tr>
      <tr>
        <td>Lab and Other Instrumental Costs for Faculty of Geomatics</td>
        <td>20</td>
        <td>3</td>
        <td>800</td>
        <td>48,000.00</td>
      </tr>
      <tr>
        <td>Students Participants (Lunch Only)</td>
        <td>7</td>
        <td>1</td>
        <td>300</td>
        <td>2,100.00</td>
      </tr>
      <tr>
        <td>Contingencies</td>
        <td>6</td>
        <td>1</td>
        <td>7,650</td>
        <td>45,900.00</td>
      </tr>
    </tbody>
  </table> --}}
</div>


<script type="text/javascript">
    $('.date').datepicker({  
       format: 'mm-dd-yyyy'
     });  
</script> 
