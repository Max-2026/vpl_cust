@extends('layout')
 





@section('content')
<br>
<br>



<div class="container shadow pt-4 pb-4">
  <div class="row">
    <div class="col-lg-8 offset-lg-2">
      <form>
        <fieldset>
          <p class="text-center pb-2 pt-3">Order ID: 1005729</p>
        
          <div class="form-group row mb-0"> <!-- Added mb-0 class to remove vertical margin -->
            <label for="selectPhone" class="col-md-4 col-form-label text-right">Transaction Type</label>
            <div class="col-md-6">
              <select class="form-control" id="selectPhone">
                <option selected>View All My Bills</option>
                <!-- Other options -->
              </select>
            </div>
          </div>
          <div class="form-group row mb-0"> <!-- Added mb-0 class to remove vertical margin -->
            <label for="selectPhone" class="col-md-4 col-form-label text-right">Number</label>
            <div class="col-md-6">
              <select class="form-control" id="selectPhone">
                <option selected>12025521553</option>
                <!-- Other options -->
              </select>
            </div>
          </div>
          <div class="form-group row mb-0"> <!-- Added mb-0 class to remove vertical margin -->
            <label for="selectPhone" class="col-md-4 col-form-label text-right">Month</label>
            <div class="col-md-6">
              <select class="form-control" id="selectPhone">
                <option selected>january</option>
                <!-- Other options -->
              </select>
            </div>
          </div>
          <div class="form-group row mb-0"> <!-- Added mb-0 class to remove vertical margin -->
            <label for="selectPhone" class="col-md-4 col-form-label text-right">Year</label>
            <div class="col-md-6">
              <select class="form-control" id="selectPhone">
                <option selected>2023</option>
                <!-- Other options -->
              </select>
            </div>
          </div>
          <div class="d-flex justify-content-center">
              <button class="btn btn-default" style="background-color: #0088cc;color:white">Show</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>




<br>
<div class="container-fluid">
    <div class="row m-4">
    <div class="col-md-12">
      <div class="card rounded pt-2 pb-2">
        <div class="card-body ">
          <table class="table table-bordered">
            <h3 class="text-center pb-3">Account Summary</h3>
            <thead>
              <tr>
                <th scope="col">Invoice</th>
                <th scope="col">Date</th>
                <th scope="col" style="width: 300px;">Description</th>
                <th scope="col">Debit</th>
                <th scope="col">Credit</th>
                <th scope="col" style="width: 100px;">Running Balance</th>
                <th scope="col">Paid</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>10057290000	</td>
                <td>20-Oct-2023	</td>
                <td>Payment Recieved by PayPal. Ref:	</td>
                <td>$50.00</td>
                <td></td>
                <td>$50.00</td>
                <td>-</td>
              </tr>
            </tbody>
          </table>
          <div class="container pt-4">
                <div class="row">
                    <div class="col-md-12 text-right">
                    <p>Total This Page: $0.216</p>
                    
                    <p>TGrand Total: $0.216</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection