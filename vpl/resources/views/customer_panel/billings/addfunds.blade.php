@extends('layout')
@section('addfunds')
@section('title', 'Add Funds')
<br>
<br>

<div class="container">
    <div class="row m-3">
        <div class="col-md-12 mt-0 mx-auto equal-width">
            <div class="card rounded">
                <p class="p-3 mt-2 text-center text-muted">The funds that you are adding will pay for phone numbers,
                    setup and service charges.

                </p>

            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row m-3">
        <div class="col-md-12 mt-0 mx-auto equal-width">
            <div class="card rounded">
                <div class="card-body mt-2 mb-1 mx-auto">
                    <div class="media mr-5">
                        <img src="images/play.png" class="mr-5" alt="Image 1" height="100px">
                        <div class="media-body mt-3">
                            <h3 class="mt-0">Watch Video Tutorial</h3>
                            <h3 class="text-center"><a class="a_tag " href="#">How to Add Funds?</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row m-4">
        <div class="card rounded">
            <div class="col-md-8 offset-md-2">
                <form method="post" action="{{ route('charge') }}">
                    @csrf
                    <br>
                    <div class="form-group row mb-0">
                        <label for="orderID" class="col-sm-4 col-form-label text-right mt-2">Order ID</label>
                        <div class="col-md-6">
                            <p class="pt-3">{{ $user->id }}</p>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <label for="customerName" class="col-sm-4 col-form-label text-right">Customer Name</label>
                        <div class="col-md-6">
                            <p class="pt-2">
                                {{ $user->first_name }} {{ $user->last_name }}
                            </p>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <label for="amount" class="col-sm-4 col-form-label text-right">Amount ($)</label>
                        <div class="col-md-6">
                        <input type="number" name="amount" class="form-control" id="amount" value="10" min="10" required>
                            <input type="hidden" name="stripe_id" class="form-control" value="{{ $user->stripe_id }}" required>
                            <input type="hidden" name="card_id" class="form-control" value="{{ $credit_card->card_id ?? ''}}" required>


                        </div>
                    </div>

                    <div class="text-center">
                        <p style="color: #0088cc;">We Accept:</p>
                        <i style="color: #0088cc;" class="fab fa-bitcoin fa-3x"></i>
                        <i style="color: #0088cc;" class="fab fa-cc-amex fa-3x"></i>
                        <i style="color: #0088cc;" class="fab fa-cc-visa fa-3x"></i>
                        <i style="color: #0088cc;" class="fab fa-cc-discover fa-3x"></i>
                        <i style="color: #0088cc;" class="fab fa-cc-mastercard fa-3x"></i>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-default" style="background-color: #0088cc;color:white">Add
                            Funds Using Credit Card</button>
                    </div>

                    <p class="text-center mt-5 mb-5">
                        To avoid high bank charges, so we can offer you lower prices, a minimum of $10 will be charged.
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var amountInput = document.getElementById('amount');
        amountInput.addEventListener('blur', function () {
            var min = 10;
            if (amountInput.value < min) {
                swal({
                    title: "Warning!",
                    text: "Amount should be minimum $10",
                    icon: "warning",
                    button: "OK",
                });
                amountInput.value = min;
            }
        });
    });
</script>

@endsection
