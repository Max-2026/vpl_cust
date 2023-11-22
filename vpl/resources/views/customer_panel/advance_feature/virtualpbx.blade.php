@extends('layout')



@section('content')
<br>
<br>
<br>
<style>
    .btn-outline-info
    {
        border: 1px solid #0088cc;
    color:#0088cc;
    }

    .btn-outline-info:hover
    {
        border: 1px solid #0088cc;
    color:white;
    background:#0088cc;
    }
</style>

<div class="container m-3">
 
<h3 style="font-weight:900;">In Use My Number</h3>
<table class="table table-bordered">
  <thead style="background-color:#0088cc;color:white;">
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">My Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>12345678909</td>
      <td><a type="button" href="#" class="btn btn-outline-info">Settings</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>12345678909</td>
      <td><a type="button" href="#" class="btn btn-outline-info">Settings</a></td>
    </tr>
  </tbody>
</table>
</div>

@endsection