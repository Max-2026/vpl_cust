@extends('layout')
@section('report_problem')
@section('title', 'Report A Problem')
<br>
<br>

<div class="container shadow rounded p-3">
  <div class="card-body text-center">
          <div class="col-md-8 mx-auto">
         <form>
          <div class="form-group row mb-0">
            <!-- Right-align labels by adding text-end class -->
            <label for="from" class="col-sm-3 col-form-label text-left">From</label>
            <div class="col-sm-9 mt-2">
              <input class="form-control col-md-8 mx-auto" type="text" id="id" value="Ahmed Raza" readonly>
            </div>
          </div>
          <div class="form-group row mb-0">
            <!-- Right-align labels by adding  class -->
            <label for="phoneno" class="col-sm-3  col-form-label text-left">Phone No</label>
            <div class="col-sm-9 mt-2">
                      <!-- <input class="form-control col-md-8 mx-auto" type="text" id="id" value="	H#23 " > -->
                      <select class="form-select col-md-8 mx-auto" style="height:32px;">
                        <option selected value="1">784213</option>
                        <option  value="2">784213</option>
                      </select>
                    </div>
          </div>
          
          <div class="form-group row mb-0">
            <!-- Right-align labels by adding  class -->
            <label for="relatedto" class="col-sm-3 col-form-label text-left">Related To</label>
            <div class="col-sm-9 mt-2">
                      <!-- <input class="form-control col-md-8 mx-auto" type="text" id="id" value="	H#23 " > -->
                      <select class="form-select col-md-8 mx-auto" style="height:32px;">
                        <option selected>Other</option>
                        <option  value="1">General</option>
                        <option  value="2">Website</option>
                        <option  value="3">Billing</option>
                      </select>
                    </div>
          </div>
          <div class="form-group row mb-0">
            <!-- Right-align labels by adding  class -->
            <label for="msg" class="col-sm-3 col-form-label text-left">Message</label>
            <div class="col-sm-9 mt-2">
            <textarea class="form-control col-md-8 mx-auto" id="email"></textarea>
            </div>
          </div>
          
          <div class="text-center mb-0">
            <input class="btn btn-primary mt-3" type="submit" value="Submit">
          </div>
          </form>
          </div>
        </div>

<br>
  </div>
<div class="container mt-5">
<table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">User ID</th>
            <th scope="col">Date Opened</th>
            <th scope="col">Ticket No</th>
            <th scope="col">Status</th>
            <th scope="col">Total Updates</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>26481476</td>
            <td>Oct 24,2023 08:19</td>
            <td>19302895</td>
            <td>Resolved</td>
            <td>1</td>
            </tr>
            
        </tbody>
        </table>
</div>
</div>

</div>




@endsection