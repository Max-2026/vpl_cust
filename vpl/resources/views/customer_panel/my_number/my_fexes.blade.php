@extends('layout')
@section('my_faxes')
<<<<<<< Updated upstream
=======
<br><br>

>>>>>>> Stashed changes
<div class="container mt-4">
    <form>
      <div class="form-group row">
        <label for="fromDate" class="col-sm-3 col-form-label"> <input type="radio">&nbsp; From Date</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="fromDate"> 
        </div>
        <label for="toDate" class="col-sm-1 col-form-label">To Date</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="toDate">
        </div>
      </div>
      <hr class="border-light">
      <div class="form-group row">
        <label for="fromDate" class="col-sm-4 col-form-label"> &nbsp;&nbsp;Range</label>
        <div class="col-sm-4">
          <input type="radio" name="range">&nbsp; Today
          <input type="radio" name="range">&nbsp;Last 7 Days
          <input type="radio" name="range">&nbsp; This Month
        </div>
      </div>
      <hr class="border-light">
      <div class="form-group row">
        <label for="fromDate" class="col-sm-4 col-form-label"> &nbsp;&nbsp;Number</label>
        <div class="col-sm-5 d-flex align-items-start">
          <p class="paragraph">Currently there are no numbers of yours forwarded to fax service.</p>
        </div>
      </div>
      <hr class="border-light">
      <div class="form-group row">
        <div class="col-sm-10 text-center">
          <button type="submit" class="btn btn-primary ">Go >></button>
        </div>
      </div>
    </form>
  </div>
  <div class="container mt-5">
  <!-- Table to display the fax details -->
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">S.No.</th>
        <th scope="col">Fax ID</th>
        <th scope="col">Date</th>
        <th scope="col">Caller ID</th>
        <th scope="col">Start Time</th>
        <th scope="col">Fax Number</th>
        <th scope="col">View/Download</th>
      </tr>
    </thead>
    <tbody>
      <!-- Table rows will go here -->
    </tbody>
  </table>
</div>
@endsection


