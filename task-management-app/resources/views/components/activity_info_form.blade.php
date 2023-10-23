<div class="container pb-3">
    <h1>Task Designing Faculty Action Plan For Faculty Board</h1>

    <div class="section-1">

        <form action="{{ route('activity.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="titleInput">Title</label>
                <input type="text" class="form-control" name="titleInput" id="titleInput" aria-describedby="titleInput"
                    placeholder="Enter the Title">
                <!-- <small id="titleHelp" class="form-text text-muted">We'll never share your title with anyone else.</small> -->
                @error('titleInput')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nameInput">Name</label>
                <input type="text" class="form-control" id="nameInput" name="nameInput" aria-describedby="nameInput"
                    placeholder="John Doe">
                <small id="nameHelp" class="form-text text-muted">Name of the responsible person for particular
                    inquery.</small>
                @error('nameInput')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Action Plan Date picker -->
            <div class="form-group date-picker-container">
                <label class="form-check-label" for="exampleCheck1">Action plan</label>
                <div class="row">
                    <div class="col">
                        <input type="text" id="startDate" name="startDate" class="date form-control"
                            placeholder="Start Date">
                        @error('startDate')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="text" id="endDate" name="endDate" class="date form-control"
                            placeholder="End date">
                        @error('endDate')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- ToDO : forms Goal Section should goes here -->

            <p>Todo Goals Section will goes here</p>

            <!-- Section introduction -->
            <div class="form-group">
                <label for="introductionFormControlTextarea1">Introduction</label>
                <textarea class="form-control" name="introInput" id="introductionFormControlTextarea1" rows="3"></textarea>
                @error('introInput')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Section upload proposal -->
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" name="fileInput" class="form-control-file" id="exampleFormControlFile1">
                @error('fileInput')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>





            <!-- may be further need -->
            <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->


            <button type="submit" class="btn btn-success">Next</button>
        </form>
    </div>







    <!-- Table 1 Funding Sources -->

    {{-- <table class="table">
    <caption>Funding Sources</caption>
    <thead>
      <tr>

        <th class="th-header">No.</th>
        <th class="th-header">Item</th>
        <th class="th-header">Units</th>
        <th class="th-header">Unit Charge</th>
        <th class="th-header">Amount (Rs.)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Registration Fee per Participant - Professionals:</td>
        <td>100</td>
        <td>45</td>
        <td>4,500.00</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Registration Fee per Participant - Students</td>
        <td>12</td>
        <td>30</td>
        <td>8,000.00</td>
      </tr>

      <tr>
        <td></td>
        <td>Total</td>
        <td></td>
        <td></td>
        <td>45,900.00</td>
      </tr>
    </tbody>
  </table> --}}
</div>




</div>

<!-- Table 2 Expenditure Details  -->

<div>



    <h2>Expenditure Details</h2>



    {{-- <table class="table">
    <caption>Transport</caption>
    <thead>
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
      <tr>
        <td>1</td>
        <td>Transport</td>
        <td>1 (University Bus)</td>
        <td>100</td>
        <td>45</td>
        <td>4,500.00</td>
      </tr>

    </tbody>
  </table> --}}


    <!-- Table 3 Subsistence/Accomodation  -->


    {{-- <table class="table">
    <caption>Subsistence/Accomodation</caption>
    <thead>
      <tr>
        <th class="th-header">No</th>
        <th class="th-header">Subsistence/ Accommodation</th>
        <th class="th-header">No. of persons/Units</th>
        <th class="th-header">No. of days/hours</th>
        <th class="th-header">Unit Cost</th>
        <th class="th-header">Total (Rs.)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Resource Persons (Lectures)</td>
        <td>1</td>
        <td>12</td>
        <td>8000</td>
        <td>96,000.00</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Technical Assistants</td>
        <td>1</td>
        <td>12</td>
        <td>1500</td>
        <td>18,000.00</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Accommodation</td>
        <td>50</td>
        <td>2</td>
        <td>2,000</td>
        <td>200,000.00</td>
      </tr>

    </tbody>
  </table> --}}



    <!-- Table 4 Others  -->


    {{-- <table class="table">
    <caption>Others</caption>
    <thead>
      <tr>
        <th class="th-header">No</th>
        <th class="th-header">Others</th>
        <th class="th-header">Quantity</th>
        <th class="th-header">No. of days/hours</th>
        <th class="th-header">Unit Cost</th>
        <th class="th-header">Total (Rs.)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Meals and Refreshments</td>
        <td>50</td>
        <td>6</td>
        <td>1500</td>
        <td>225,000.00</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Administrative Cost (Faculty Administration)</td>
        <td>1</td>
        <td>1</td>
        <td>30000</td>
        <td>30,000.00</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Geo Tech-Hub Coordination</td>
        <td></td>
        <td></td>
        <td></td>
        <td>30,000.00</td>
      </tr>

    </tbody>
  </table> --}}
</div>


<script type="text/javascript">
    $('.date').datepicker({
        format: 'mm-dd-yyyy'
    });
</script>
