@extends('layout')

@section('plan_detail')
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
<label for="fromInput" style="padding-left:5%;" class="col-sm-2 col-form-label">Plan Name</label>
<div class="col-sm-10">
<!-- <a href="#" style="margin-left:40%;" ></a> -->
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="fromInput" value="India Unlimited">

</div>
</div>
<!-- Sender Information -->
<div class="form-group row div-line">
<label for="fromInput"  style="padding-left:5%;" class="col-sm-2 col-form-label">Description</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="fromInput" value="India Unlimited

">
</div>
</div>

<!-- Ticket Information -->
<div class="form-group row div-line">
<label for="ticketNumber" style="padding-left:5%;" class="col-sm-2 col-form-label">Total Minutes Per Month</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="1200">
</div>
</div>


<!-- Date -->

<div class="form-group row">
<label for="ticketNumber" style="padding-left:5%;" class="col-sm-2 col-form-label">Countries Included</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="(91) India -">
</div>
</div>

<!-- Status -->



</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection