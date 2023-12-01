@extends('layout')
@section('send_sms')
@section('title', 'Send SMS')
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded">
                <div class="card-body">
                    <div class="row">
                        <!-- First Column -->
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="numberInput">Number:</label>
                                <input type="text" class="form-control" id="numberInput" placeholder="Enter number">
                                <p class="pt-2 text-muted">Example: 923001234567</p>
                            </div>

                            <div class="form-group">
                                <label for="messageInput">Message:</label>
                                <textarea class="form-control" id="messageInput" placeholder="Enter message"></textarea>
                            </div>

                            <button class="btn btn-default" style="background-color: #0088cc;color:white">Send</button>
                        </div>

                        <!-- Second Column -->
                        <div class="col-md-5">
                        <div style="margin-left:300px; margin-top: 30px;">
                            <p>Error/Response Here</p>
                            <hr style="width: 70%;">
                            <p>Talk Time Balance: $9.79</p>
                            <p>See SMS Rates <a href="#">Click Here</a></p>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<br>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
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
                    <div class="col-md-9">
                        <p>All the SMS charges are deducted from talk time.</p>
                    </div>
                    <div class="col-md-3">
                    <p>Total This Page: $0.216</p>
                    <hr style="width: 50%;">
                    <p>Grand Total: $0.216</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>


@endsection