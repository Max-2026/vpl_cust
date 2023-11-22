
@extends('layout')
 





@section('content')
<br>
<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card rounded">
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">S.No.</th>
                <th scope="col" style="width: 100px;">Numbers</th>
                <th scope="col">From</th>
                <th scope="col">Date/Time</th>
                <th scope="col">Message</th>
                <th scope="col" style="width: 200px;">Charge Amount</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>123456789</td>
                <td>John Doe</td>
                <td>2023-01-01 12:00 PM</td>
                <td>This is a longer message that needs more space.</td>
                <td>$10.00</td>
                <td><button class="btn btn-danger">Delete</button></td>
              </tr>
            </tbody>
          </table>
          <div class="container pt-4">
                <div class="row">
                    <div class="col-md-10">
                        <p>All the SMS charges are deducted from talk time.</p>
                    </div>
                    <div class="col-md-2">
                    <p>Total This Page: $0.216</p>
                    <hr style="width: 75%;">
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