@extends('layout')
@section('mastertalktime')
@section('title', 'Master TalkTime')
<br>
<br>
<div class="container p-5">
<h3>Talk Time Usage Report</h2>
<br>
<div class="col-md-12 mx-auto">
<div class="row shadow rounded p-4">

            <div class="col-md-6">
    <form>
                <div class="form-group row">
                                <label for="phponeno" class="col-sm-2 col-form-label font-weight-bold text-flex">My Number</label>
                                <div class="col-sm-10">
                                            <select class="custom-select w-50">
                                                    <option selected>All</option>
                                                    @foreach($numbers as $number)
                                                    <option value="{{ $number->number }}">{{ $number->number }}</option>
                                                  
                                                    @endforeach
                                            </select>     
                                </div>
                            </div>  

                <div class="form-group row">
                    <label for="phponeno" class="col-sm-2 col-form-label font-weight-bold">Month</label>
                    <div class="col-sm-10">
                                <select  class="custom-select w-50">
                                        <option selected>Select Month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                </select>     
                    </div>
                </div>  

                
   </form>
            </div>



    <div class="col-md-6">
    <div class="form-group  row">
                                <label for="phponeno" class="col-sm-2 col-form-label font-weight-bold">Year</label>
                                <div class="col-sm-10 ">
                                            <select class="custom-select  w-50">
                                            <option selected>Select Year</option>
                                              @php $currentYear = date('Y');   @endphp
                                                @for ($year = 2000; $year <= $currentYear; $year++)
                                                  <option {{ $year == $currentYear ? 'selected' : '' }}>{{ $year }}</option>
                                                @endfor    
                                            </select>     
                                </div>
                            </div>  

                <div class="form-group row">
                    <label for="phponeno" class="col-sm-2 col-form-label font-weight-bold">Text Search</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control w-50" id="textInput" placeholder="Enter text">
                    </div>
                </div>  

                
    </div>
    <div class="d-flex justify-content-right">
    <button type="Submit" class="btn btn-default mx-auto" style="background-color:#0088cc;color:white;">Show</button>
    </div>
   
</div>
</div>
<br>
<br>

<h3 class="text-center mb-4 mt-2">Talk Time Usage</h3>
<table class="table table-bordered ">
  <thead>
    <tr>
      <th scope="col">Phone No.</th>
      <th scope="col">Ring To</th>
      <th scope="col">Date</th>
      <th scope="col">Duration (mm:ss)</th>
      <th scope="col">Chargeable Duration (min)</th>
      <th scope="col">Per Minute Charges ($)</th>
      <th scope="col"style="width:500px;">Total Cost ($)</th>
      <th scope="col">Running Balance ($)</th>                                                  
</tr>
  </thead>
  <tbody>
    <tr>
      <td>447537186551</td>
      <td>923055046680(PSTN)</td>
      <td>21-Oct-2023</td>
      <td>0:23</td>
      <td>1</td>
      <td>0.6</td>
      <td>0.08</td>
      <td>0.08</td>

    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><strong>This Page Total</strong></td>
      <td>0.08</td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><strong>Total</strong></td>
      <td>0.08</td>
    </tr>

  </tbody>
</table>


</div>



@endsection