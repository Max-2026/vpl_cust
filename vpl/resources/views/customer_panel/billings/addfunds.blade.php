@extends('layout')
 





@section('content')
<br>
<br>

<div class="container-fluid">
<div class="row m-3">
        <div class="col-md-12 mt-0 mx-auto equal-width">
            <div class="card rounded">
 <p class="p-3 mt-2 text-center text-muted">The funds that you are adding will pay for phone numbers, setup and service charges.

</p>

            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
<div class="row m-3">
        <div class="col-md-12 mt-0 mx-auto equal-width">
            <div class="card rounded">
                <div class="card-body mt-2 mb-1 mx-auto">
                    <div class="media mr-5">
                        <img src="images/play.png" class="mr-5" alt="Image 1" height="100px">
                        <div class="media-body mt-3">
                            <p class="mt-0 text-muted">Watch Video Tutorial</p>
                            <h4><a href="#">How to Add Funds?</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row m-4">
        <div class="card rounded">
            <div class="col-md-8 offset-md-2">
                <form>
                    <br>
                    <div class="form-group row mb-0">
                        <label for="orderID" class="col-sm-4 col-form-label text-right">Order ID</label>
                        <div class="col-md-6">
                        <p class="pt-3">1005729</p>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <label for="customerName" class="col-sm-4 col-form-label text-right">Customer Name</label>
                        <div class="col-md-6">
                        <p class="pt-3">Ahmed raza</p>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <label for="amount" class="col-sm-4 col-form-label text-right">Amount ($)</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="amount" placeholder="10">
                        </div>
                    </div>
                    <div class="text-center">
                        <p style="color: #0088cc;">We Accept:</p>
                        <i style="color: #0088cc;"  class="fab fa-bitcoin fa-3x"></i>
                        <i style="color: #0088cc;" class="fab fa-cc-amex fa-3x"></i>
                        <i style="color: #0088cc;" class="fab fa-cc-visa fa-3x"></i>
                        <i style="color: #0088cc;" class="fab fa-cc-discover fa-3x"></i>
                        <i style="color: #0088cc;" class="fab fa-cc-mastercard fa-3x"></i>
                        <i style="color: #0088cc;" class="fab fa-cc-paypal fa-3x"></i>
                    </div>

                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal" style="background-color: #0088cc;color:white">Add Funds Using Credit Card</button>
                    </div>
                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-default" style="background-color: #0088cc;color:white">Checkout with PayPal</button>
                    </div>
        
                    <p class="text-center mt-5 mb-5">
                        To avoid high bank charges, so we can offer you lower prices, a minimum of $10 will be charged.
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Credit Card Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="acctitle">Account Title</label>
      <input type="text" class="form-control" id="acctitle">
    </div>
    <div class="form-group col-md-6">
      <label for="accno">Account Number</label>
      <input type="number" class="form-control" id="accno">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="accdate">Expiry Date</label>
    <input type="date" class="form-control" id="accdate">
    </div>
    <div class="form-group col-md-6">
      <label for="acccvv">CVV</label>
      <input type="text" class="form-control" id="acccvv">
    </div>
  </div>
  <div class="d-flex justify-content-center">
              <button class="btn btn-default" style="background-color: #0088cc;color:white">Submit</button>
          </div>
</form>

      </div>
    </div>
  </div>
</div>











@endsection