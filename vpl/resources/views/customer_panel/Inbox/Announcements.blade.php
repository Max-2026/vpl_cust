@extends('layout')

@section('content')

<div class="container mt-4 ">
<div class="card container">
<div class="card-body">
<h1 class="text-center fs-4 mb-4">Announcements</h1>

<div class="row">
<!-- Announcements Counter Column -->
<div class="col-md-4">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">Announcements (0)</span>
</div>
<button type="button" style = "background-color:#0088cc;color:white" >Announcements</button>
</div>
</div>

<!-- Report A Problem Button Column -->
<div class="col-md-2">
<a href="{{ route('Inbox.Report_a_Problem') }}" style = "background-color:#0088cc;color:white" class="btn btn-outline-primary">
Report A Problem
</a>
</div>


<!-- Archive Button Column -->
<div class="col-md-2">
<a href="{{ route('Inbox.archive') }}" style = "background-color:#0088cc;color:white" class="btn btn-outline-primary">
Archive
</a>
</div>


<!-- Ticket Number Search Column -->
<div class="col-md-4">
<div class="input-group">
<input type="text" class="form-control" placeholder="Ticket Number" aria-label="Ticket Number">
<div class="input-group-append">
<button class="btn btn-primary" type="button" style = "background-color:#0088cc;color:white">Search</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<br>
<br>
<br>
<br>
@endsection
