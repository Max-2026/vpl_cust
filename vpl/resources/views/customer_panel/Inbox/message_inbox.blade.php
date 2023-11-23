@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Message Board</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>My Messages</h1>
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link active" href="#">Inbox</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Announcements</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Report A Problem</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Archive</a>
</li>
<li class="nav-item">
<input type="text" class="form-control" placeholder="Ticket Number" aria-label="Ticket Number">
</li>
<li>
<div class="input-group-append">
<button class="btn btn-primary" type="button" style = "background-color:#0088cc;color:white">Search</button>
</li>
</ul>

<div class="tab-content">
<div class="tab-pane active" id="inbox">
<table class="table">
<thead>
<tr>
<th>From</th>
<th>Subject</th>


</tr>
</thead>
<tbody>
<tr>
<td>
<img src="images/VPL_logomini.png" class="rounded-circle" width="30" height="30">
<span class="ml-2">ahmedraza Date Opened: Oct 24, 2023 08:19 Ticket No.: 1005729000 Status.: Resolved Total updates: 1</span>
</td>
<td>Complain</td>

<td><a href="{{ route('Inbox.inboxdetails') }}">This complain is about 447537186551 demo testing ...<a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</body>
</html>
@endsection