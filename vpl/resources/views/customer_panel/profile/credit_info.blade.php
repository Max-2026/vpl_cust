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
                <div class="card-body text-center ">
                    <div class="col-md-8 mx-auto">
                        <form id="form1">
                            <div class="form-group row mb-0">
                                <!-- Right-align labels by adding text-end class -->
                                <label for="id" class="col-sm-3 col-form-label text-left">House/Apartment</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="id"
                                        value="	H#23 ">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <!-- Right-align labels by adding  class -->
                                <label for="firstName" class="col-sm-3  col-form-label text-left">Street</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="firstName"
                                        value="5">
                                </div>
                            </div>

                            <div class="form-group row  mb-0">
                                <!-- Right-align labels by adding  class -->
                                <label for="lastName" class="col-sm-3 col-form-label text-left">City</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="lastName"
                                        value="Karachi">
                                </div>
                            </div>
                            <div class="form-group row  mb-0">
                                <!-- Right-align labels by adding  class -->
                                <label for="email" class="col-sm-3 col-form-label text-left">State/Province </label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="email"
                                        value="abc">
                                </div>
                            </div>
                            <!-- Right-align labels by adding  class -->
                            <div class="form-group row  mb-0">
                                <label for="company" class="col-sm-3 col-form-label text-left">Zip/Postal Code</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto text-left" type="text" id="company"
                                        value="123">
                                </div>
                            </div>
                            <!-- Right-align labels by adding  class -->
                            <div class="form-group row mb-0">
                                <label for="password" class="col-sm-3 col-form-label text-left">Country</label>
                                <div class="col-sm-9">
                                    <!-- <input class="form-control col-md-8 mx-auto" type="password" id="password" value="**********"> -->
                                    <select class="form-select select-small col-md-8 mx-auto" name=""
                                        id="">
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="ALBANIA">ALBANIA</option>
                                        <option value="ALGERIA">ALGERIA</option>
                                        <option value="ANDORRA">ANDORRA</option>
                                        <option value="ANGOLA">ANGOLA</option>
                                        <option value="ANTIGUA & BARBUDA">ANTIGUA & BARBUDA</option>
                                        <option value="ARGENTINA">ARGENTINA</option>
                                        <option value="ARMENIA">ARMENIA</option>
                                        <option value="AUSTRALIA">AUSTRALIA</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Right-align labels by adding  class -->
                            <div class="form-group row  mb-0">
                                <label for="language" class="col-sm-3 col-form-label text-left">Business Tel</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="language"
                                        value="32423432">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="language" class="col-sm-3 col-form-label text-left">Home Tel</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="language"
                                        value="324324324">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="language" class="col-sm-3 col-form-label text-left">Mobile</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="number" id="language"
                                        value="0554224">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <label for="language" class="col-sm-3 col-form-label text-left">Fax</label>
                                <div class="col-sm-9">
                                    <input class="form-control col-md-8 mx-auto" type="text" id="language"
                                        value="2">
                                </div>
                            </div>
                            <div class="text-center mb-0 mt-2">
                                <input class="btn btn-primary" type="submit" value="UPDATE">
                            </div>
                        </form>
                        <form id="form2" style="display: none;">
                            <div class="form-group row ">
                                <label for="id" class="col-sm-6 col-form-label text-left">Select Card you wish
                                    to make Primary</label>
                                <div class="col-sm-6 mt-2">
                                    <!-- <input class="form-control col-md-8 mx-auto" type="text" id="id" value="	H#23 " > -->
                                    <select class="form-select col-md-8 mx-auto">
                                        <option selected value="visa">visa</option>
                                        <option value="visa">visa</option>
                                        <option value="visa">visa</option>
                                        <option value="visa">visa</option>
                                        <option value="visa">visa</option>
                                    </select>
                                </div>
                            </div>

                        </form>
                        <form id="form3" method="POST" action="{{ route('card_detail_submitted') }}">
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


                            <div class="text-center mb-0 mt-2">
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>
                        </form>

                    </div>
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
