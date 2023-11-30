@extends('layout')
@section('call_log')
@section('title', 'Call Logs')

<div class="container mt-4">
    <form>
    <div class="col-md-12 mt-0 mx-auto equal-width">
    <div class="card rounded mt-4">
    <div class="card-body mt-2 mb-1 ">
      <div class="form-group row">
        <label for="fromDate" class="col-sm-3 col-form-label">&nbsp; From Date</label>
        <label for="toDate" class="col-sm-1 col-form-label"><input type="radio" name="" id=""></label>
        <div class="col-sm-3 mt-2 inline-flex">
          <input type="text" class="form-control" id="toDate"> 
          &nbsp;
          <input class="btn-1 rounded" type="submit" value="...">
        </div>
      </div>
      
      <div class="form-group row ">
        <label for="fromDate" class="col-sm-3 col-form-label">&nbsp; To Date	</label>
        <label for="toDate" class="col-sm-1 col-form-label"></label>
        <div class="col-sm-3 mt-2 inline-flex">
          <input type="text" class="form-control" id="toDate"> 
          &nbsp;
          <input class="btn-1 rounded" type="submit" value="...">
        </div>
      </div>
 
      <div class="form-group row ">
        <label for="fromDate" class="col-sm-3 col-form-label"></label>
        <label for="toDate" class="col-sm-1 col-form-label radio-m"><input type="radio" name="" id=""></label>
        <div class="col-sm-4 mt-2">
          <input type="radio" name="range">&nbsp; Today
          <input type="radio" name="range">&nbsp;Last 7 Days
          <input type="radio" name="range">&nbsp; This Month
        </div>
      </div>
      <div class="form-group row">
        <label for="fromDate" class="col-sm-4 col-form-label"> &nbsp;&nbsp;Status</label>
        <div class="col-sm-5  align-items-start">
            <select name="" id="">
                <option value="Answer">Answer</option>
                <option value="All">All</option>
            </select>
            <br>
            <input class="mt-2" type="submit" name="" id="" value="Submit">
            </div>
      </div>
      </div>
      </div>
      </div>
    </form>
  </div>
  <div class="container mt-5">

  <div class="col-md-12 mt-0 mx-auto equal-width">
   <div class=" ">
    <div class="card-body mt-2 mb-1">
        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th scope="col">Call ID</th>
                <th scope="col">Type</th>
                <th scope="col">Call From</th>
                <th scope="col">Virtual Number</th>
                <th scope="col">Status</th>
                <th scope="col">Call Date</th>
                <th scope="col">Start Time</th>
                <th scope="col">End Time</th>
                <th scope="col">Duration (Minutes)</th>
                <th scope="col">Per Min Forwarding Call Charge</th>
                <th scope="col">Incoming Call Rate</th>
                <th scope="col">Free Incoming Minutes Remaining</th>
                <th scope="col">Bill Amount ($)</th>
                <th scope="col">Master TalkTime** ($)</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total $ 0</td>
                    <td>Total $ 0	</td>
                    <td></td>
                    <td>0 $	</td>
                    <td></td>

                </tr>
            </tbody>
        </table>


        <h5 class="mt-5 paragraph">* talk time of the number when this number received the call</h5>
        <h5 class="paragraph">** master talk time when this received call</h5>
        <hr class="mt-5">
        <div class="text-center">
            <p>Virtual Phone Line is a trade mark of Super Technologies inc. United States. All rates on this web site are in US Dollars. <br>�Copyrights Super Technologies Inc. 2020-2021. Feedback</p>
        </div>
        <hr class="mt-5">
        <hr>
    </div>
    </div>
    </div>

</div>

<!-- Link to Bootstrap JS and dependencies -->










@endsection


