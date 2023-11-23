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
max-width: 900px;
margin: auto;
padding: 20px;
border: 1px solid #dee2e6;
border-radius: 0.25rem;
}

.archive-btn {
text-align: right;
}
</style>
</head>
<body>

<div class="container ticket-container mt-5">
<h2 class="mb-4">Inbox Details</h2>
<div class="archive-btn">

<button class="btn btn-primary mb-3" style = "background-color:#0088cc;color:white">Move to Archive</button>
<button class="btn btn-primary mb-3" style = "background-color:#0088cc;color:white">Mark as Unread</button>
</div>
<br>
<div class="archive-btn  btn-group" role="group" aria-label="Basic example">
  <button class="btn btn-primary mx-5" style = "background-color:#0088cc;color:white">Inbox</button>
  <button class="btn btn-primary mx-5" style = "background-color:#0088cc;color:white">Create a Ticket</button>
  <button class="btn btn-primary mx-5" style = "background-color:#0088cc;color:white">Archive</button>
</div>
<br>
<br>

<form>

<div class="form-group row">
<label for="fromInput" class="col-sm-2 col-form-label">Message To:</label>
<div class="col-sm-10">
<input type="text" readonly class="form-control-plaintext" id="fromInput" value="Ahmed Raza">
</div>
</div>
<!-- Sender Information -->
<div class="form-group row">
<label for="fromInput" class="col-sm-2 col-form-label">From:</label>
<div class="col-sm-10">
<input type="text" readonly class="form-control-plaintext" id="fromInput" value="System Admin">
</div>
</div>

<!-- Ticket Information -->
<div class="form-group row">
<label for="ticketNumber" class="col-sm-2 col-form-label">Ticket No.</label>
<div class="col-sm-10">
<input type="text" readonly class="form-control-plaintext" id="ticketNumber" value="1005729000">
</div>
</div>


<!-- Date -->

<div class="form-group row">
<label for="ticketNumber" class="col-sm-2 col-form-label">Date.</label>
<div class="col-sm-10">
<input type="text" readonly class="form-control-plaintext" id="ticketNumber" value="Oct 24, 2023 08:19">
</div>
</div>

<!-- Status -->
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="statusSelect">Status</label>
<div class="col-sm-10">
<select readonly class="form-control-plaintext" class="form-control" id="statusSelect">
<option>Resolved</option>
<option>Open</option>
<option>Pending</option>
<option>Closed</option>
</select>
</div>
</div>

<!-- Messages -->

<div class="form-group row">
<label for="ticketNumber" class="col-sm-2 col-form-label">Messages.</label>
<div class="col-sm-10">
<input type="text" readonly class="form-control-plaintext" id="ticketNumber" value="This complain is about 447537186551 demo testing">
</div>
</div>

<!-- Reply -->
<div class="form-group row">
<label  class="col-sm-2 col-form-label" for="replyTextarea">Reply:</label>
<div class="col-sm-10">
<textarea class="form-control" style="resize:none;" id="replyTextarea" rows="3"></textarea>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label" for="statusSelect">Status</label>
<div class="col-sm-10">
<select readonly class="form-control-plaintext" class="form-control" id="statusSelect">
<option>Re-Open</option>

</select>
</div>
</div>


<div class="form-group row ">
<div class="col-sm-12 d-flex justify-content-center">
<button  type="submit" style = "background-color:#0088cc;color:white" class="btn btn-primary ">Submit</button>
</div>
</div>

</form>
<table class="table table-bordered container">
  <thead  style="background-color:#0088cc;color:white;">
    <tr>
      <th scope="col">Sent By</th>
      <th scope="col">Date</th>
      <th scope="col">Update Message</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Ahsan Saleem</th>
      <th scope="row">28-Oct-2023</th>
      <th scope="row">Update by Ahsan Saleem </th>
    </tr>


   
  </tbody>
</table>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection