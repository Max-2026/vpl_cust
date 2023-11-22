@extends('layout')





@section('content')


<br>
<br>
<div class="container-fluid">
<h2 style="font-weight:800;">Talk Time Usage Report</h2>
<br>
<div class="col-md-11 mx-auto">
<div class="row shadow rounded p-4">

            <div class="col-md-6">
    <form>
                <div class="form-group row">
                                <label for="phponeno" class="col-sm-2 col-form-label font-weight-bold text-flex">My Number</label>
                                <div class="col-sm-10">
                                            <select class="custom-select w-50">
                                                    <option selected>Select Number</option>
                                                    <option value="1">-All</option>
                                                    <option value="2">12908397248873</option>
                                                    <option value="3">12908397248873</option>
                                                    <option value="4">12908397248873</option>
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
                                               <?php
                                                        for ($i = 2000; $i <= 2023; $i++) {
                                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                                        }
                                                        ?>
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
    <button type="Submit" class="btn btn-default" style="background-color:#0088cc;color:white;">Show</button>
    </div>
   
</div>
</div>
<br>
<br>
<h4 style="font-weight:900;text-align:center">Talk Time Usage</h3>
<table class="table table-bordered table-responsive">
  <thead style="background-color:#0088cc;color:white;">
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