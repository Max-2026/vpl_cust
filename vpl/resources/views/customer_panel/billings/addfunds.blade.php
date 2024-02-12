@extends('layout')
@section('title', 'Add Funds')

@section('content')
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
                    <form id="add-funds-form" action="{{ route('single_charge') }}" method="POST">
                        @csrf
                        <br>
                        <div class="form-group row mb-0">
                            <label for="amount" class="col-sm-4 col-form-label text-right">Amount ($)</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="amount" name="amount" placeholder="10"
                                    required>
                            </div>
                        </div>

                        <div class="form-row">
                            <label for="card-element">Credit or debit card</label>
                            <div id="card-element" class="form-control"></div>
                            <div id="card-errors" role="alert"></div>
                        </div>

                        <div class="text-center mt-4">
                            <button id="card-button" class="btn btn-default"
                                style="background-color: #0088cc;color:white">Add Funds Using Credit Card</button>
                        </div>

                        <p class="text-center mt-5 mb-5">
                            To avoid high bank charges, so we can offer you lower prices, a minimum of $10 will be charged.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');
        var elements = stripe.elements();
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        var card = elements.create('card', {
            hidePostalCode: true,
            style: style
        });
        card.mount('#card-element');
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        const cardButton = document.getElementById('card-button');
        cardButton.addEventListener('click', async (e) => {
            e.preventDefault();
            const {
                setupIntent,
                error
            } = await stripe.confirmCardSetup(
                '{{ $intent->client_secret }}', {
                    payment_method: {
                        card: card
                    }
                }
            );
            if (error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
            } else {
                paymentMethodHandler(setupIntent.payment_method);
            }
        });

        function paymentMethodHandler(payment_method) {
            var form = document.getElementById('add-funds-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'payment_method');
            hiddenInput.setAttribute('value', payment_method);
            form.appendChild(hiddenInput);
            form.submit();
        }
    </script>
@endsection
