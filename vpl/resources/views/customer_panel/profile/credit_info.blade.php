@extends('layout')
@section('credit_info')

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


<style>
    /* body{
      background-color: rgba(245, 245, 245, 0.63);
    } */
    .a_tag{

      text-decoration: none;
    }
    .equal-width {
        width: 100%;
    }
    
.btn{
    font-size: x-small;
    
    background-color:#0088cc;color:white
}
.text-center
{
    font-size:30px;
}
.table > tbody > tr > td {
  padding: 2px; /* Adjust the padding to suit your needs */
}
.form-group.row {
    margin-bottom: -20px; /* You can adjust this value as needed */
  }
  .select-small option {
  font-size: 12px; /* Smaller font size for the options */
}

.form-control:focus, .form-select:focus  {
  box-shadow: none !important;
  border-color: #ced4da;
  /* outline: 1px solid #0ea5f0 !important;  */
  border-radius: 10px !important;
  /* Or your preferred color */
}
.form-control, .form-select {
 
  border-radius: 10px !important;
  /* Or your preferred color */
}


</style>

<br>
<br>
<div class="container mt-0"> <!-- Reduce top margin for the container -->

  <div class="row">
    <div class="col-md-11 mx-auto">
      <div class="card rounded">
        <div class="card-header text-center bg-white">
        <div class=" d-flex justify-content-between">
                  <p class="card-text mr-5"></p>
                  <h4 class="card-text ml-3 mt-2">Credit Card Info</h4>
                  <h6 class="card-text ml-3 mt-2"><a class="a_tag" href="#" id="showForm2">Set Primary Credit Card</a></h6>
                  <h6 class="card-text ml-3 mt-2"><a class="a_tag " href="#" id="showForm3">Add Credit Card</a></h6>
                  <h3 class="card-text ml-3"></h3>
                </div>
        </div>
        <div class="card-body text-center">
          <div class="col-md-8 mx-auto">
         <form id="form1">
          <div class="form-group row">
            <!-- Right-align labels by adding text-end class -->
            <label for="id" class="col-sm-3 col-form-label text-left">House/Apartment</label>
            <div class="col-sm-9">
              <input class="form-control col-md-8 mx-auto" type="text" id="id" value="	H#23 " >
            </div>
          </div>
          <div class="form-group row">
            <!-- Right-align labels by adding  class -->
            <label for="firstName" class="col-sm-3  col-form-label text-left">Street</label>
            <div class="col-sm-9">
              <input class="form-control col-md-8 mx-auto" type="text" id="firstName" value="5">
            </div>
          </div>
          
          <div class="form-group row">
            <!-- Right-align labels by adding  class -->
            <label for="lastName" class="col-sm-3 col-form-label text-left">City</label>
            <div class="col-sm-9">
              <input class="form-control col-md-8 mx-auto" type="text" id="lastName" value="Karachi">
            </div>
          </div>
          <div class="form-group row">
            <!-- Right-align labels by adding  class -->
            <label for="email" class="col-sm-3 col-form-label text-left">State/Province	</label>
            <div class="col-sm-9">
              <input class="form-control col-md-8 mx-auto" type="text" id="email" value="abc">
            </div>
          </div>
          <!-- Right-align labels by adding  class -->
          <div class="form-group row">
            <label for="company" class="col-sm-3 col-form-label text-left">Zip/Postal Code</label>
            <div class="col-sm-9">
              <input class="form-control col-md-8 mx-auto text-left" type="text" id="company" value="123">
            </div>
          </div>
          <!-- Right-align labels by adding  class -->
          <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label text-left">Country</label>
            <div class="col-sm-9">
              <!-- <input class="form-control col-md-8 mx-auto" type="password" id="password" value="**********"> -->
              <select class="form-select select-small col-md-8 mx-auto" name="" id="">
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
          <div class="form-group row mt-1">
            <label for="language" class="col-sm-3 col-form-label text-left">Business Tel</label>
            <div class="col-sm-9">
              <input class="form-control col-md-8 mx-auto" type="text" id="language" value="32423432">
            </div>
          </div>
          <div class="form-group row">
            <label for="language" class="col-sm-3 col-form-label text-left">Home Tel</label>
            <div class="col-sm-9">
              <input class="form-control col-md-8 mx-auto" type="text" id="language" value="324324324">
            </div>
          </div>
          <div class="form-group row">
            <label for="language" class="col-sm-3 col-form-label text-left">Mobile</label>
            <div class="col-sm-9">
              <input class="form-control col-md-8 mx-auto" type="number" id="language" value="0554224">
            </div>
          </div>
          <div class="form-group row">
            <label for="language" class="col-sm-3 col-form-label text-left">Fax</label>
            <div class="col-sm-9">
              <input class="form-control col-md-8 mx-auto" type="text" id="language" value="2">
            </div>
          </div>
          <div class="text-center">
            <input class="btn mt-2" type="submit" value="UPDATE">
          </div>
          </form>
          <form id="form2" style="display: none;">
          <div class="form-group row container">
                <div class="form-inline mb-4">
                <label for="language" class="text-left">Select Card you wish to make Primary</label>
                
                <!-- <input class="form-control col-md-8 mx-auto" type="text" id="language" value="2"> -->
                <select  class="form-select col-4 mx-auto ml-5 container" name="" id="">
                    <option value="VISA-2131...3213">VISA-2131...3213</option>
                </select>
                </div>
          </div>
          </form>
          <form id="form3" style="display: none;">
          <div class="form-group row mx-auto container">
                <div class="form-inline mb-2">
                <label for="language" class="text-left">Number</label>
                <input class="form-control col-md-8 mx-auto" type="text" id="language" value="">
                </div>
                <div class="form-inline mb-2">
                   <label for="language" class="text-left">Type</label>
                  <p class="mr-3"></p>
                  <!-- <input class="form-control col-md-8 mx-auto" type="text" id="language" value="2"> -->
                    <select class="form-select col-md-8 mx-auto ml-5 mr-3 select-small" style="width:216px; height:35px;">
                    <option value="">choose</option>
                        <option value="VISA">VISA</option>
                        <option value="Master">Master</option>
                        <option value="American Express">American Express</option>
                        <option value="Discovery">Discovery</option>
                    </select>
                </div>
                <div class="form-inline mb-2 ">
                    <label for="language" class="text-left mr-5">Credit Card Expiry	</label>

                    <select class="form-select select-small" style="width:103px; height:35px;">
                        <option value="">choose</option>
                        <option value="january">january</option>
                        <option value="Febuary">Febuary</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                    <p>&nbsp;-&nbsp;</p>
                    <select class="form-select select-small " style="width:103px; height:35px;">
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                    </select>
                </div>
                <div class="form-inline mb-2">
                   <label for="language" class="text-left mr-1">Credit Card Verify Number</label>
                   <input class="form-control ml-3" type="text" id="language" value="">
                </div>
                <div class="text-center mb-3">
                   <input class="btn mt-2" type="submit" value="UPDATE">
               </div>
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
                   <div class="media mr-2 card-text mr-5 ">
                        <img src="images/icons/gmail_icon.png" class="mr-3" alt="Image 1" height="60px">
                        <div class="media-body mt-1">
                        <p class="">Your profile is currently not linked with your Gmail ID <br> <a class="a_tag" href="#">Click here to login Gmail account</a> </p> 
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

</div>  



@endsection



