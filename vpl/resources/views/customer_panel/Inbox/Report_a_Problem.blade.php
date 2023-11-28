@extends('layout')

@section('content')



<div class="container" style="margin-left:4%;margin-top:2%;">
<div>
<h1 class="fs-5 mb-5" style="display: inline-block;background-color:#0088cc;color:white">Inbox</h1>
<h1 class="fs-5 mb-5" style="display: inline-block;margin-left:10%;">Create Ticket</h1>
<h1 class="fs-5 mb-5" style="display: inline-block;margin-left:20%;">Archive</h1>
</div>

<div class="row">
<div class="col-md-6">
<form action="/create-ticket" method="post">
<div class="mb-3">
<label for="from" class="form-label">From</label>
<input type="text" class="form-control" id="from" name="from">
</div>
<div class="mb-3">
<label for="phone_number" class="form-label">Phone Number</label>
<select class="form-select" id="related_to" name="related_to">
<option value=""></option>
<option value="1">1234567</option>
<option value="2">12345</option>
<option value="3">121412532</option>
</select>
</div>
<div class="mb-3">
<label for="related_to" class="form-label">Related to</label>
<select class="form-select" id="related_to" name="related_to">
<option value="">Please Select</option>
<option value="1">Issue</option>
<option value="2">Question</option>
<option value="3">Other</option>
</select>
</div>
<div class="mb-3">
<label for="message" class="form-label">Message</label>
<textarea style=" resize: none;" class="form-control" id="message" name="message" rows="3"></textarea>
</div>
<button type="submit" style = "background-color:#0088cc;color:white" class="btn btn-default" >Submit</button>
</form>
</div>
</div>
</div>




@endsection