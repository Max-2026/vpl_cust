    @extends('layout')
    @section('credit_info')
    @section('title', 'Credit Card Info')


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#showForm1").click(function(e) {
                e.preventDefault();
                $("#form1").show();
                $("#form2").hide();
                $("#form3").hide();
            });

            $("#showForm2").click(function(e) {
                e.preventDefault();
                $("#form1").hide();
                $("#form2").show();
                $("#form3").hide();
            });

            $("#showForm3").click(function(e) {
                e.preventDefault();
                $("#form1").hide();
                $("#form2").hide();
                $("#form3").show();
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
                            <h6 class="card-text ml-3 mt-3"><a class="a_tag" href="#" id="showForm1">Credit Card
                                    Info</a></h6>
                            <h6 class="card-text ml-3 mt-3"><a class="a_tag" href="#" id="showForm2">Set Primary
                                    Credit Card</a></h6>
                            <h6 class="card-text ml-3 mt-3"><a class="a_tag " href="#" id="showForm3">Add Credit
                                    Card</a></h6>
                            <h3 class="card-text ml-3"></h3>
                        </div>
                    </div>
                </div>
                <div class="card text-center rounded">
                    <div class="col-md-8 mx-auto mt-4">
                        <form id="form1">
                            <div class="form-group row mb-0">
                                <!-- Right-align labels by adding text-end class -->
                                <label for="id" class="col-sm-3 col-form-label text-left">Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="id"
                                        value="{{ $user->first_name }} {{$user->last_name}}">

                                </div>
                                <!-- Right-align labels by adding  class -->
                                <label for="firstName" class="col-sm-3  col-form-label text-left">Number</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="number" id="firstName"
                                        value="{{ $credit_cards->card_number ?? '-'}}">

                                </div>
                                <!-- Right-align labels by adding  class -->
                                <label for="lastName" class="col-sm-3 col-form-label text-left">Type</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="lastName"
                                        value="{{ $credit_cards->card_type ?? '-'}}">

                                </div>
                                <!-- Right-align labels by adding  class -->
                                <label for="email" class="col-sm-3 col-form-label text-left">Credit Card Verification</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="email"
                                        value="{{ $credit_cards->cvv ?? '-' }}">
                                </div>
                            </div>
                            <!-- Right-align labels by adding  class -->
                            <div class="form-group row  mb-0">
                                <label for="company" class="col-sm-3 col-form-label text-left">Expiry Month</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto text-left" type="text" id="company"
                                        value="{{ $credit_cards->card_expiry ?? '-'}}">
                                </div>
                            </div>

                            <div class="form-group row  mb-0">
                                <label for="language" class="col-sm-3 col-form-label text-left">Expiry Year</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="language"
                                        value="32423432">
                                </div>
                            </div>
                           
                            <div class="text-center mb-0 mt-2 mb-4">
                                <input class="btn btn-primary" type="submit" value="UPDATE">
                            </div>
                        </form>
                        <form id="form2" style="display: none;" action="{{ route('set_primary') }}" method="POST">
                            @csrf
                            <label class="mb-3" for="selected_card">Select Primary Credit Card</label>
                            <select class="form-select col-md-8 mx-auto" name="selected_card">
                                @if($credit_cards)
                                @foreach($user_credit_cards as $card)
                                    <option value="{{ $card->id }}">{{ $card->card_type }} - {{ $card->card_number }}</option>
                                @endforeach
                                @else
                                    <option value="0">Please Add Credit Card</option>
                                @endif
                            </select>
                            <button class="mt-3 mb-4" type="submit">Set Primary</button>
                        </form>
                        <form id="form3" method="POST" action="{{ route('card_detail_submitted') }}" style="display: none;">
                            @csrf
                            <div class="form-group row mb-0">
                                <label for="card_number" class="col-sm-3 col-form-label text-left">Number</label>
                                <div class="col-sm-9 mt-2">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="card_number"
                                        name="card_number" minlength="15" maxlength="16" required>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="name_on_card" class="col-sm-3 col-form-label text-left">Name on
                                    Card</label>
                                <div class="col-sm-9 mt-2">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="name_on_card"
                                        name="name_on_card" value="" required>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="name_on_card" class="col-sm-3 col-form-label text-left">Type</label>
                                <div class="col-sm-6 mt-2 credit_card_styling">
                                    <select name="card_type" class="form-select" id="">
                                        <option value="visa" selected >Visa</option>
                                        <option value="master">Master</option>
                                        <option value="amex">American Express</option>
                                        <option value="discover">Discover</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <label for="card_expiry" class="col-sm-3 col-form-label text-left">Credit Card
                                    Expiry</label>
                                <div class="col-sm-9 mt-2">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="card_expiry"
                                        name="card_expiry" placeholder="MM/YY" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <label for="cvv" class="col-sm-3 col-form-label text-left">Credit Card
                                    Verification</label>
                                <div class="col-sm-9 mt-2">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="cvv"
                                        name="cvv" pattern="[0-9]{3,4}" required>
                                </div>
                            </div>


                            <div class="text-center mb-0 mt-2 mb-4">
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>
                        </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-4 ">
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
                  <p class="card-text ml-3">Here you will see any uploaded documents including authorization forms and personal <br> identification documents.</p>
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
                  <p class="card-text ml-3">Facebook ID Management	</p>
                  <p class="card-text mr-4">Your current profile is not linked to facebook. <br> <a href="#" class="a_tag">Click here to link to your facebook account.</a></p>
                </div>
                <hr class="my-1 mx-3">
                <div class=" d-flex justify-content-between mt-0">
                     <p class="card-text ml-3">Facebook ID Management	</p>
                   <div class="media mr-5 card-text mr-5 ">
                        <img src="images/icons/gmail_icon.png" class="mr-3" alt="Image 1" height="60px">
                        <div class="media-body mt-1">
                        <p class="">Watch Video Tutorial <br> <a class="a_tag" href="#">How to change Ring to Number?</a> </p> 
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
                  <p class="card-text ml-3">Enable Public Profile	</p>
                  <p class="card-text mr-4"> <input class="mr-1" type="checkbox">https://www.virtualphoneline.com/profile/any of your telephone number. </p>
                </div>
                <hr class="my-1 mx-3">
                <div class=" d-flex justify-content-between">
                  <p class="card-text ml-3">Show in Profile	</p>
                  <p class="card-text mr-4"> <input class="mr-1" type="checkbox">Picture <input class="mr-1" type="checkbox">My Location <input class="mr-1" type="checkbox">My Number <input class="mr-1" type="checkbox">Voicemails <input class="mr-1" type="checkbox">Dialer (let anybody call my number)</p>
                </div>
                <hr class="my-1 mx-3">
                <div class=" d-flex justify-content-between mt-2">
                  <p class="card-text ml-3">Select Public Profile		</p>
                  <p class="card-text mr-4"> https://www.virtualphoneline.com/profile/</p>
                  <p class="card-text mr-4"> <input type="text" class="form-control" style="width: 150px;"> <br> <p class=" card-text mr-5">Maximum 10 Characters</p> </p>
                  <p class="card-text mr-5"> <input class="mr-5 " type="submit" value="Save"></p>
                </div>
                <hr class="my-1 mx-3 mt-0">
                <div class=" d-flex justify-content-between">
                  <p class="card-text ml-3">	</p>
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
                  <p class="card-text ml-3">You can change forwarding address to any mobile number. Just send your SMS confirmation code below from any mobile to +447860034130 and your forwarding address will be set automatically to sending mobile number.</p>
                </div>
                <hr class="my-1 mx-3">
                <div class=" d-flex justify-content-between mt-2">
                  <p class="card-text ml-3">	</p>
                  <p class="card-text mr-4"> SMS Confirmation Code</p>
                  <p class="card-text ml-3">	<input type="text" class="form-control" placeholder="678974419744" readonly></p>
                  <p class="card-text ml-5"> <a class="mr-4 a_tag" href="#">Send On My Mobile </a> <a class="mr-5 a_tag" href="#">Reset Code</a>	</p>
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
              Usage News Feed <a  class="a_tag" href="#">[?]:</a>
              </div>
              <div class="mt-2"> <!-- h-auto class added for automatic height adjustment -->
                <div class=" d-flex justify-content-between">
                  <p class="card-text ml-3">Today (22-Nov-2023)</p>
                </div>
                <hr class="my-1 mx-3">
              </div>
              <hr class="my-1 mx-3 mt-2">
              <div class=" d-flex justify-content-between">
                  <p class="card-text ml-3"><span style="color:#0088cc;"> 02:05</span> uploaded document for the number <a class="a_tag" href="#"> 34910036526</a></p>
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
                  <p class="card-text ml-3">Virtual Phone Line is a trade mark of Super Technologies inc. United States. All rates on this web site are in US Dollars. <br> �Copyrights Super Technologies Inc. 2020-2021. <a class="a_tag" href="#">Feedback</a></p>
                </div>
            </div>
          </div>
        </div>
   

        <script>
        document.getElementById('card_expiry').addEventListener('input', function(e) {
            var input = e.target.value;
            input = input.replace(/\D/g, '').substring(0, 4);
            var month = input.substring(0, 2);
            var year = input.substring(2, 4);

            if (input.length > 0) {
                input = month;
                if (input.length >= 2) {
                    input += '/' + year;
                }
            }
            e.target.value = input;
        });
    </script>


@endsection