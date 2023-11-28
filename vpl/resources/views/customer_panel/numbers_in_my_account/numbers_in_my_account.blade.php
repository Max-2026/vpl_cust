@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Support Ticket</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
.ticket-container {
max-width: 1200px;
margin: auto;

border: 1px solid #dee2e6;
border-radius: 0.25rem;
}

.archive-btn {
text-align: right;
}
/* Add a blue link style */
.blue-link {
  color: #007bff; /* Blue color */
  text-decoration: underline; /* Underline the text */
  cursor: pointer; /* Change cursor to a hand pointer on hover (optional) */
}

/* Change link color on hover (optional) */
.blue-link:hover {
  color: #0056b3; /* Darker blue on hover */
}
.div-line {
  border-bottom: 1px solid #dee2e6;
  padding-bottom: 10px;
  margin-bottom: 10px;
}

</style>
</head>
<body>

<div class="container ticket-container mt-5 table">
<br>
<br>

<form>

<div class="form-group row div-line">
<label for="fromInput" style="padding-left:5%;" class="col-sm-2 col-form-label">Telephone Number:</label>
<div class="col-sm-10">



<a href="{{route  ('numbers_in_my_account.call_forwading_manager') }}" style="margin-left:40%;" >12025521553</a>

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
<a href="{{route  ('numbers_in_my_account.monthly_recurring_charges') }}" style="margin-left:40%;" >$5.99  Go Annual Billing   What's this?</a>
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
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">Current Forwarding Settings: PSTN : 03327951445</label>
<div class="col-sm-10">
<a href="{{route  ('numbers_in_my_account.call_forwading_manager') }}" style="margin-left:40%;" >Change forwarding</a>
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
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">Calling Plan</label>
<div class="col-sm-10">
<a href="{{route  ('my_number.pakage_plan') }}" style="margin-left:40%;" >UK Land Line    Change Plan   Remove Plan</a>
</div>
</div>

<div class="form-group row div-line">
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">Total Plan Minutes</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="- min. ( - )">
</div>
</div>

<div class="form-group row div-line">
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">Minutes Remaining</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="- min.">
</div>
</div>

<div class="form-group row div-line">
<label class="col-sm-2 col-form-label" style="padding-left:5%;" for="statusSelect">Logs</label>
<div class="col-sm-10">
<a href="{{route  ('my_number.call_log') }}" style="margin-left:40%;" >Call Logs</a>
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


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection


