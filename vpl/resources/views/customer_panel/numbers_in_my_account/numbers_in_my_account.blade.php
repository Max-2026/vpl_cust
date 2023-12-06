@extends('layout')
@section('numbers_in_my_account')
@section('title', 'This Page give you information about your Number')

<div class="container ticket-container mt-5 table">
<br>
<br>

<form>

<div class="form-group row div-line">
<label for="fromInput" style="padding-left:5%;" class="col-sm-2 col-form-label">Telephone Number:</label>
<div class="col-sm-10">



<a href="{{ route('call_forwading_setting') }}" style="margin-left:40%;" >12025521553</a>

</div>
</div>
<!-- Sender Information -->
<div class="form-group row div-line">
<label for="fromInput"  style="padding-left:5%;" class="col-sm-2 col-form-label">Number is from City:</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="fromInput" value="Washington; D.C.">
</div>
</div>

<!-- Ticket Information -->
<div class="form-group row div-line">
<label for="ticketNumber" style="padding-left:5%;" class="col-sm-2 col-form-label">Number is from City:</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="DC">
</div>
</div>


<!-- Date -->

<div class="form-group row div-line">
<label for="ticketNumber" style="padding-left:5%;" class="col-sm-2 col-form-label">Number is from Country:</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="USA">
</div>
</div>

<!-- Status -->
<div class="form-group row div-line">
<label for="ticketNumber" style="padding-left:5%;" class="col-sm-2 col-form-label">Rate Center Name:</label>

</div>

<!-- Messages -->

<div class="form-group row div-line">
  <label for="ticketNumber" style="padding-left:5%;" class="col-sm-2 col-form-label">Monthly Recurring Charges</label>
  <div class="col-sm-10">
    <span style="margin-left:40%;">
      $5.99
    </span>
    <a href="{{ route('monthly_recurring_charges') }}" style="margin-left:5%;">Go Annual Billing What's this?</a>
  </div>
</div>

<div class="form-group row div-line">
<label for="ticketNumber" style="padding-left:5%;" class="col-sm-2 col-form-label">Annual Recurring Charges</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="0$">
</div>
</div>


<div class="form-group row div-line">
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">One Time Non Recurring Charges That you paid for this number:</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="$5.99">
</div>
</div>

<div class="form-group row div-line">
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">Current Forwarding</label>
<div class="col-sm-10">
<a href="{{ route('call_forwading_setting') }}" style="margin-left:40%;" >Change forwarding</a>
</div>
</div>




<div class="form-group row div-line">
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">Free Incoming Minutes</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="0">
</div>
</div>


<div class="form-group row div-line">
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">SMS Supported</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="No">
</div>
</div>


<div class="form-group row div-line">
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">Voice Supported</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="Yes">
</div>
</div>


<div class="form-group row div-line">
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">Per Min Charges After Free Minutes</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="$0.0100 /min /min">
</div>
</div>

<div class="form-group row div-line">
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">Free Minutes Left</label>
<div class="col-sm-10">
<input type="text"  style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="0 min.">
</div>
</div>

<div class="form-group row div-line">
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">Minutes Used</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="0 min.">
</div>
</div>



<div class="form-group row div-line">
  <label for="ticketNumber" style="padding-left:5%;" class="col-sm-2 col-form-label">Calling Plan</label>
  <div class="col-sm-10">
    <span style="margin-left:40%; font-size:12px">
    UK Land Line
    </span>
    <a href="{{ route('package') }}" style="margin-left:5%;">Change Plan</a>
    <a href="{{ route('package') }}" style="margin-left:5%;">Remove Plan</a>
  </div>
</div>

<div class="form-group row div-line">
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">Total Plan Minutes</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="2500 min. (26-Nov-2023-26-Dec-2023)">
</div>
</div>

<div class="form-group row div-line">
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">Minutes Remaining</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="2500 min.">
</div>
</div>

<div class="form-group row div-line">
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">Logs</label>
<div class="col-sm-10">
<a href="{{ route('call_logs') }}" style="margin-left:40%;" >Call Logs</a>
</div>
</div>

<div class="form-group row div-line">
    <label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">Purchase Date</label>
    <div class="col-sm-10 d-flex">
        <input type="text" style="margin-left:10%;" class="form-control-plaintext" id="ticketNumber1" value="08-Nov-2023">
        <input type="text"  style="margin-left:5%;" class="form-control-plaintext" id="ticketNumber2" value="Billing Cycle Date">
        <input type="text" style="margin-left:12%;" class="form-control-plaintext" id="ticketNumber3" value="08 of every month">
    </div>
</div>




<div class="form-group row div-line">
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">In queue for being removed</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="NO">
</div>

</div>
<div class="form-group row ">
<a href="YOUR_LINK_URL" style="padding-left:5%;"  >Remove My Number Permanently</a>
</div>

</form>

</form>



</div>

@endsection