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
            <form id="payment-form" method="post" action="{{ route('single_charge')}}">
                    @csrf
                    <!-- Displaying order details -->
                    <input type="hidden" name="order_id" value="{{ $user->id }}">
                    <!-- Stripe Elements for card details -->
                    <div class="form-group row mb-0">
                        <label for="amount" class="col-sm-4 col-form-label text-right">Amount ($)</label>
                        <div class="col-md-6">
                            <input type="number" name="amount" class="form-control" id="amount" placeholder="10" value="10" required>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <label for="card-element" class="col-sm-4 col-form-label text-right">Card Details</label>
                        <div class="col-md-6">
                            <div id="card-element"></div>
                            <div id="card-errors" role="alert"></div>
                        </div>
                    </div>
                    <!-- Submit button -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-default" style="background-color: #0088cc;color:white">Add Funds Using Credit Card</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('{{ config('services.stripe.key') }}');
    var elements = stripe.elements();
    var style = {
        base: {
            fontSize: '16px',
            color: '#32325d',
        }
    };
    var card = elements.create('card', {style: style});
    card.mount('#card-element');
    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        stripe.createToken(card).then(function(result) {
            if (result.error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Insert the token into the form so it gets submitted to the server
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', result.token.id);
                form.appendChild(hiddenInput);
                // Submit the form
                form.submit();
            }
        });
    });
</script>

@endsection
