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
                    <form id="searchForm">
                        <div class="form-group custom-dropdown">
                            <input type="text" class="form-control" id="dynamicOptionsInput" name="dynamicOptionsInput" placeholder="Phone number">
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
                                <option value="{{ $country->id }}" data-show-form="{{ $country->id }}">
                                    {{ $country->code }} - {{ $country->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="button" class="btn btn-primary" onclick="searchClicked()">Search</button>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!-- Add a container for the second form -->
        <div class="container pt-3 " id="secondFormContainer" style="display: none;">
            <div class="row">
                <div class="col-md-12">
                    <!-- Original Table -->
                    <table class="table table-bordered originalTable" id="originalTable" >
                    <thead>
            <tr>
              <th scope="col">Area Code</th>
              <th scope="col">City/Area</th>
              <th scope="col">AreaCode</th>
              <th scope="col">City/Area</th>
            </tr>
          </thead>
          <tbody>
          <td class="country-name"><a href="#"></a></td>
            <td> <a href="#">Vienna (Wien)</a></td>
            <td><a href="">43-67</a></td>
            <td><a href="">Mobile</a></td>
          </tbody>
           </table>
            <!-- Additional Table (Initially Hidden) -->
          <table class="table table-bordered" id="additionalTable" style="display: none;">
           <thead>
            <tr>
              <th><input style="" type="checkbox" aria-label="Checkbox for following text input"></th>
              <th scope="col">Phone Number</th>
              <th scope="col">Country</th>
              <th scope="col">State</th>
              <th scope="col">Rate Center</th>
              <th scope="col">Free Incoming Minutes</th>
              <th scope="col">Setup</th>
              <th scope="col">Rate Per Minute*</th>
              <th scope="col">Monthly Charges</th>
              <th scope="col">Annual Charges</th>
            </tr>
          </thead>
          <tbody>
            <td>**</td>
            <td>1-305-722-1333</td>
            <td class="country-name"></td>
            <td>Florida FL</td>
            <td>MIAMI</td>
            <td>3000</td>
            <td>$7.99</td>
            <td>$0.02</td>
            <td><a href="#">$7.99</a></td>
            <td><a href="#">$95.88</a></td>
            <tr>
              <td colspan="12" class="text-center">
                <div class="d-flex justify-content-right align-items-center">
                  <input name="mm" type="radio"> &nbsp;&nbsp;Monthly
                  <input name="mm" class="ml-2" type="radio"> &nbsp;&nbsp;Annually
                  <button class="btn btn-primary ml-4">Add Selected to Shopping Cart</button>
                </div>
              </td>
            </tr>
            <tr style="bgcolor:;">
              <td class="simple" style="align:left;" colspan="12">* Per Minute Receiving Charges After Free Minutes</td>
            </tr>
            <tr style="bgcolor:;">
              <td class="simple" style="align:left;" colspan="12">** (cannot be purchased in batch)</td>
            </tr>
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
</script>

@endsection
