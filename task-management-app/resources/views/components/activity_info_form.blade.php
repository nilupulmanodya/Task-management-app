
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

   <button type="submit" class="btn btn-success">Submit</button> 
</form>
  </div>
</div>


<script type="text/javascript">
    $('.date').datepicker({  
       format: 'mm-dd-yyyy'
     });  
</script> 
