@extends('layout')
@section('title', 'Stripe')


@section('content')

    <style>
        .StripeElement {
            background-color: white;
            padding: 8px 12px;
            border-radius: 4px;
            border: 1px solid transparent;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>

    <div class="container mt-5">
        <form action="{{ route('single_charge') }}" method="POST" id="subscribe-form">
            @csrf

            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control">

            <label for="card-holder-name">Card Holder Name</label>
            <input id="card-holder-name" class="form-control" name="name_on_card" type="text">

            <div class="form-row">
                <label for="card-element">Credit or debit card</label>
                <div id="card-element" class="form-control"></div>
                <div id="card-errors" role="alert"></div>
            </div>

            <div class="stripe-errors mt-3"></div>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

            <div class="form-group text-center">
                <button id="card-button" data-secret="{{ $intent->client_secret }}"
                    class="btn btn-lg btn-success btn-block">SUBMIT</button>
            </div>
        </form>
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
        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
        cardButton.addEventListener('click', async (e) => {
            e.preventDefault();
            console.log("attempting");
            const {
                setupIntent,
                error
            } = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: card,
                        billing_details: {
                            name: cardHolderName.value
                        }
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
            var form = document.getElementById('subscribe-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'payment_method');
            hiddenInput.setAttribute('value', payment_method);
            form.appendChild(hiddenInput);
            form.submit();
        }
    </script>

@endsection
