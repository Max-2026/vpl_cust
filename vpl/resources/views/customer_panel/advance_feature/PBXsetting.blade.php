@extends('layout')





@section('content')
<br>
<br>
<div class="container shadow rounded p-5">
    <h2 style="font-weight:800;">Configure Virtual PBX</h2>
    <hr>
    <form>
                <div class="form-group container row">
                    <label for="phponeno" class="col-sm-2 col-form-label font-weight-bold">Phone Number</label>
                    <div class="col-sm-10">
                    <input type="number" readonly class="form-control-plaintext" id="phponeno" value="0218773224423">
                    </div>
                </div>

                <div class="form-group container row">
                    <label for="phponeno" class="col-sm-2 col-form-label font-weight-bold">Play IVR</label>
                    <div class="col-sm-10">
                                <select class="custom-select w-50">
                                        <option selected>Select Menu</option>
                                        <option value="1">-000</option>
                                        <option value="2">_VOICE_</option>
                                </select>     
                    </div>
                </div>  

                
</form>

<p class="text-right mr-3"><a  href="{{ route('advance_feature.uploadpbx')}}">IVR MANAGEMENT</a></p>
<hr>
<p>Please provide title and the PSTN (landline or mobile) number for the dialed digit 0-9. Selected IVR will be played as the number receives the call. Leaving the number box empty, will remove the entry autometically.
</p>
<hr>

<table class="table table-bordered container">
  <thead  style="background-color:#0088cc;color:white;">
    <tr>
      <th scope="col">Dial</th>
      <th scope="col">Title</th>
      <th scope="col">Ring On Number</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td><input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"></td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td><input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"></td>
      <td><input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"></td>
    </tr>
   
  </tbody>

</table>
<hr>
<div style="display: flex; justify-content: flex-end;">
    <button type="button" class="btn btn-default" style="color: white; background-color: #0088cc;">Save Settings</button>
</div>


<hr>


</div>






@endsection