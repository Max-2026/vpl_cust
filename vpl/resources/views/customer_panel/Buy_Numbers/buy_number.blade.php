@extends('layout')
@section('title', 'Buy Number')

@section('buy_number')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<br>
<br>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="container-fluid">
            <div class="row m-3">
                <div class="col-md-12 mt-0 mx-auto equal-width">
                    <div class="card rounded">
                        <div class="card-body mt-2 mb-1 mx-auto">
                            <div class="media mr-5">
                                <img src="images/play.png" class="mr-5" alt="Image 1" height="100px">
                                <div class="media-body mt-3">
                                    <h3 class="mt-0">Watch Video Tutorial</h3>
                                    <h3 class="text-center"><a class="a_tag " href="#">How to Buy a Number?</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="form-section">
                    <form id="searchForm" action="{{ url('/search')}}" method="GET">
                        @csrf
                        <div class="form-group custom-dropdown">
                            <input type="text" class="form-control" id="dynamicOptionsInput" name="dynamicOptionsInput"
                                placeholder="Phone number">
                            <div id="dynamicOptionsContainer"></div>
                        </div>
                        <div class="or-divider d-flex align-items-center">
                            <div></div>
                            <span class="px-2">OR</span>
                            <div></div>
                        </div>
                        <div class="form-group">
                            <select class="form-select" id="countrySelect" name="countrySelect">
                                <option value="" selected>Select Country</option>
                                @foreach ($countries as $country)
                                <option value="{{ $country->code }}" data-show-form="{{ $country->code }}">
                                    {{ $country->code }} - {{ $country->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" onclick="searchClicsked()">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container pt-3 " id="secondFormContainer" style="display:;">
        <div class="row">
            <div class="col-md-12">
            <table class="table table-bordered originalTable" id="originalTable">
    <thead>
        <tr>
            <th scope="col">Area Code</th>
            <th scope="col">City/Area</th>
            <th scope="col">AreaCode</th>

        </tr>
    </thead>
    <tbody>
    @foreach($result1 as $records)

    <tr>
        <td>{{$records->country->code}}-{{$records->code}}</td>
        <td><a href="{{url('city',['city'=>$records->name ])}}">{{$records->name}}</a></td>
        <td>{{$records->code}}</td>
    </tr>

        @endforeach
    </tbody>
</table>
<br>
<br>

<table class="table table-bordered originalTable" >
    <thead>
        <tr>
            <th scope="col"><input type="checkbox" name="" id=""></th>
            <th scope="col">Phone Number</th>
            <th scope="col">Country</th>
            <th scope="col">City Area</th>
            <th scope="col">SMS Support</th>
            <th scope="col">Free Incoming Minutes</th>
            <th scope="col">Setup</th>
            <th scope="col">Rate Per Minute*</th>
            <th scope="col">Monthly Charges</th>
            <th scope="col">Annual Charges</th>
        </tr>
    </thead>
    <tbody>
    @foreach($search_query as $check)
    <tr>
        <td><input type="checkbox" name="" id=""></td>
      <td>{{$check->number ?? ''}}</td>
      <td>{{$check->country->name ?? ''}}</td>
      <td>{{$check->area->name ?? ''}}</td>
      <td>{{$check->sms_support ?? 'No'}}</td>
      <td>{{$check->free_incoming_minutes ?? 'No'}}</td>
      <td>$ {{$check->setup_charges ?? ''}}</td>
      <td>$ {{$check->per_mintue_charges ?? 'No'}}</td>
      <td>$ {{$check->monthly_charges ?? 'No'}}.00</td>
      <td>$ {{$check->annual_charges ?? 'No'}}.00</td>
    </tr>
    @endforeach
    </tbody>
</table>
            </div>
        </div>
    </div>
</div>

<script>
    // dynamic api options of input
    var dynamicOptions = [
        @foreach ($countries as $country)
        "{{ $country->code }} - {{ $country->name }}",
        @endforeach
    ];
    // dynamic api options of input end

    // Function to handle search button click
    function searchClicked() {
        // Sample logic: Check if the input field has a value
        var inputVal = $("#dynamicOptionsInput").val();
        
        if (inputVal) {
            // Show the secondFormContainer
            $("#secondFormContainer").show();
        } else {
            // Hide the secondFormContainer
            $("#secondFormContainer").hide();
        }
    }
</script>

@endsection
