    @extends('layout')
    @section('credit_info')
    @section('title', 'Credit Card Info')


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".showForm1").click(function(e) {
                e.preventDefault();
                $(".form1").show();
                $(".form2").hide();
                $(".form3").hide();
            });

            $(".showForm2").click(function(e) {
                e.preventDefault();
                $(".form1").hide();
                $(".form2").show();
                $(".form3").hide();
            });

            $(".showForm3").click(function(e) {
                e.preventDefault();
                $(".form1").hide();
                $(".form2").hide();
                $(".form3").show();
            });
        });
    </script>



    <br>
    <br>
    <div class="container mt-0"> <!-- Reduce top margin for the container -->

        <div class="row">
            <div class="col-md-11 mx-auto">
                <div class="card rounded">
                    <div class="card-header text-center bg-white">
                        <div class=" d-flex justify-content-between">
                            <p class="card-text mr-5"></p>
                            <!-- <h4 class="card-text ml-3 mt-3"></h4> -->
                            <h6 class="card-text ml-3 mt-3"><a class="a_tag showForm1" href="#">Credit Card
                                    Info</a></h6>
                            <h6 class="card-text ml-3 mt-3"><a class="a_tag showForm2" href="#">Set Primary
                                    Credit Card</a></h6>
                            <h6 class="card-text ml-3 mt-3"><a class="a_tag showForm3" href="#">Add Credit
                                    Card</a></h6>
                            <h3 class="card-text ml-3"></h3>
                        </div>
                    </div>
                </div>
                <div class="card text-center rounded">
                    <div class="col-md-8 mx-auto mt-4">
                        <form class="form1" style="display: none;">
                            <div class="form-group row mb-3">
                                <!-- Right-align labels by adding text-end class -->
                                <label for="id" class="col-sm-3 col-form-label text-left">Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="id"
                                        value="{{ $user->first_name }} {{ $user->last_name }}">

                                </div>
                                <!-- Right-align labels by adding  class -->
                                <label for="firstName" class="col-sm-3  col-form-label text-left">Number</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="number" id="firstName"
                                        value="{{ $active_credit_card->card_last_four ?? '-' }}">

                                </div>
                                <!-- Right-align labels by adding  class -->
                                <label for="lastName" class="col-sm-3 col-form-label text-left">Type</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="lastName"
                                        value="{{ $active_credit_card->card_type ?? '-' }}">
                                </div>
                            </div>
                            <div class="form-group row  mb-0">
                                <label for="company" class="col-sm-3 col-form-label text-left">Expiry Month</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto text-left" type="text" id="company"
                                        value="{{ $active_credit_card->exp_month ?? '-' }}">
                                </div>
                            </div>

                            <div class="form-group row  mb-2">
                                <label for="language" class="col-sm-3 col-form-label text-left">Expiry Year</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="language"
                                        value="{{ $active_credit_card->exp_year ?? '-' }}">
                                </div>
                            </div>

                        </form>
                        <form class="form2" style="display: none;" action="{{ route('set_primary') }}" method="POST">
                            @csrf
                            <label class="mb-3" for="selected_card">Select Primary Credit Card</label>
                            <select class="form-select col-md-8 mx-auto" name="selected_card">
                                @if ($user_credit_cards->count() > 0)
                                    @foreach ($user_credit_cards as $card)
                                        <option value="{{ $card->id }}">{{ $card->card->brand }} -
                                            {{ $card->card->last4 }}</option>
                                    @endforeach
                                @else
                                    <option value="0">Please Add Credit Card</option>
                                @endif

                            </select>
                            <button class="mt-3 mb-4" type="submit">Set Primary</button>
                        </form>
                        <form id="payment-form" class="form3" method="post" action="{{ route('add_credit_card') }}">
                            @csrf

                            <div class="form-group row mb-0">
                                <label for="card-element" class="col-sm-4 col-form-label text-right">Card
                                    Details</label>
                                <div class="col-md-6">
                                    <div class="mt-2" id="card-element"></div>
                                    <div id="card-errors" role="alert"></div>
                                </div>
                            </div>
                            <!-- Submit button -->
                            <div class="text-center ml-5">
                                <button class="mt-3 mb-4 " type="submit">Add Credit Card</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-4">
        <div class="col-md-11 mx-auto">
            <div class=" rounded mb-0">
                <div class="card-header">
                    Affiliate Program:
                </div>
                <div class="mt-2"> <!-- h-auto class added for automatic height adjustment -->
                    <div class=" d-flex justify-content-between">
                        <p class="card-text ml-3">Your Affiliate Link</p>
                        <p class="card-text mr-4">virtualphoneline.com/signup/?affilation=vJgwiFoOCF1005729</p>
                    </div>
                    <hr class="my-1 mx-3">
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-11 mx-auto">
            <div class=" rounded mb-0">
                <div class="card-header">
                    Document Management:
                </div>
                <div class="mt-2"> <!-- h-auto class added for automatic height adjustment -->
                    <div class=" d-flex justify-content-between">
                        <p class="card-text ml-3">Here you will see any uploaded documents including authorization
                            forms and personal <br> identification documents.</p>
                        <p class="card-text mr-4">(no documents uploaded)</p>
                    </div>
                    <hr class="my-1 mx-3">
                    <div class="text-end mr-4">
                        <p><a href="#" class="a_tag">Upload Document</a></p>
                    </div>
                    <hr class="my-1 mx-3">
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-3 ">
        <div class="col-md-11 mx-auto">
            <div class=" rounded mb-0">
                <div class="card-header">
                    Manage Open IDs:
                </div>
                <div class="mt-2"> <!-- h-auto class added for automatic height adjustment -->
                    <div class=" d-flex justify-content-between">
                        <p class="card-text ml-3">Facebook ID Management </p>
                        <p class="card-text mr-4">Your current profile is not linked to facebook. <br> <a
                                href="#" class="a_tag">Click here to link to your facebook account.</a></p>
                    </div>
                    <hr class="my-1 mx-3">
                    <div class=" d-flex justify-content-between mt-0">
                        <p class="card-text ml-3">Facebook ID Management </p>
                        <div class="media mr-5 card-text mr-5 ">
                            <img src="images/icons/gmail_icon.png" class="mr-3" alt="Image 1" height="60px">
                            <div class="media-body mt-1">
                                <p class="">Watch Video Tutorial <br> <a class="a_tag" href="#">How to
                                        change Ring to Number?</a> </p>
                                <hr class="my-1 mx-3">
                            </div>
                        </div>
                    </div>
                    <hr class="my-1 mx-3 mt-2">
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-3 ">
        <div class="col-md-11 mx-auto">
            <div class=" rounded mb-0">
                <div class="card-header">
                    Public Profile Settings:
                </div>
                <div class="mt-2"> <!-- h-auto class added for automatic height adjustment -->
                    <div class=" d-flex justify-content-between">
                        <p class="card-text ml-3">Enable Public Profile </p>
                        <p class="card-text mr-4"> <input class="mr-1"
                                type="checkbox">https://www.virtualphoneline.com/profile/any of your telephone number.
                        </p>
                    </div>
                    <hr class="my-1 mx-3">
                    <div class=" d-flex justify-content-between">
                        <p class="card-text ml-3">Show in Profile </p>
                        <p class="card-text mr-4"> <input class="mr-1" type="checkbox">Picture <input
                                class="mr-1" type="checkbox">My Location <input class="mr-1" type="checkbox">My
                            Number <input class="mr-1" type="checkbox">Voicemails <input class="mr-1"
                                type="checkbox">Dialer (let anybody call my number)</p>
                    </div>
                    <hr class="my-1 mx-3">
                    <div class=" d-flex justify-content-between mt-2">
                        <p class="card-text ml-3">Select Public Profile </p>
                        <p class="card-text mr-4"> https://www.virtualphoneline.com/profile/</p>
                        <p class="card-text mr-4"> <input type="text" class="form-control" style="width: 150px;">
                            <br>
                        <p class=" card-text mr-5">Maximum 10 Characters</p>
                        </p>
                        <p class="card-text mr-5"> <input class="mr-5 " type="submit" value="Save"></p>
                    </div>
                    <hr class="my-1 mx-3 mt-0">
                    <div class=" d-flex justify-content-between">
                        <p class="card-text ml-3"> </p>
                        <p class="card-text mr-4"> <input class="mr-1" type="submit" value="Save"></p>
                    </div>
                    <hr class="my-1 mx-3 mt-2">
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-2 ">
        <div class="col-md-11 mx-auto">
            <div class=" rounded mb-0">
                <div class="card-header">
                    Change forwarding Address via SMS:
                </div>
                <div class="mt-2"> <!-- h-auto class added for automatic height adjustment -->
                    <div class=" d-flex justify-content-between">
                        <p class="card-text ml-3">You can change forwarding address to any mobile number. Just send
                            your SMS confirmation code below from any mobile to +447860034130 and your forwarding
                            address will be set automatically to sending mobile number.</p>
                    </div>
                    <hr class="my-1 mx-3">
                    <div class=" d-flex justify-content-between mt-2">
                        <p class="card-text ml-3"> </p>
                        <p class="card-text mr-4"> SMS Confirmation Code</p>
                        <p class="card-text ml-3"> <input type="text" class="form-control"
                                placeholder="678974419744" readonly></p>
                        <p class="card-text ml-5"> <a class="mr-4 a_tag" href="#">Send On My Mobile </a> <a
                                class="mr-5 a_tag" href="#">Reset Code</a> </p>
                    </div>
                    <hr class="my-1 mx-3">
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2 ">
        <div class="col-md-11 mx-auto">
            <div class=" rounded mb-0">
                <div class="card-header">
                    Usage News Feed <a class="a_tag" href="#">[?]:</a>
                </div>
                <div class="mt-2"> <!-- h-auto class added for automatic height adjustment -->
                    <div class=" d-flex justify-content-between">
                        <p class="card-text ml-3">Today (22-Nov-2023)</p>
                    </div>
                    <hr class="my-1 mx-3">
                </div>
                <hr class="my-1 mx-3 mt-2">
                <div class=" d-flex justify-content-between">
                    <p class="card-text ml-3"><span style="color:#0088cc;"> 02:05</span> uploaded document for the
                        number <a class="a_tag" href="#"> 34910036526</a></p>
                </div>
                <hr class="my-1 mx-3">
            </div>
            <hr class="my-1 mx-3 mt-2">
            <div class=" d-flex justify-content-between">
                <p class="card-text ml-3"><a class="a_tag" href="#">Show more</a></p>
            </div>
            <hr class="my-1 mx-3 mt-2">
        </div>
    </div>


    <div class="row mt-2 ">
        <div class="col-md-11 mx-auto">
            <div class=" rounded mb-0">
                <div class="card-header">
                    Back Orders:
                </div>
                <table class="table sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Order Date</th>
                            <th>Country</th>
                            <th>Area</th>
                            <th>RateCenter</th>
                            <th>Quantity</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <!-- need more -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-md-11 mx-auto">
            <div class=" rounded mb-0">
                <div class="card-header">
                    Reports:
                </div>
                <div class="mt-2"> <!-- h-auto class added for automatic height adjustment -->
                    <div class=" d-flex justify-content-between">
                        <p class="card-text ml-3"><a class="a_tag" href="#">Annual Reports</a></p>
                        <p class="card-text mr-4"></p>
                        <p class="card-text mr-4"><a class="a_tag" href="#">Annual Reports</a></p>
                        <p class="card-text mr-4"></p>
                    </div>
                    <hr class="my-1 mx-3">
                </div>
                <hr class="my-1 mx-3 mt-4">
                <div class=" d-flex justify-content-between">
                    <p class="card-text ml-3">Virtual Phone Line is a trade mark of Super Technologies inc. United
                        States. All rates on this web site are in US Dollars. <br> �Copyrights Super Technologies Inc.
                        2020-2021. <a class="a_tag" href="#">Feedback</a></p>
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
        var card = elements.create('card', {
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
