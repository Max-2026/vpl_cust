@extends('layout')
@section('virtualpbx')
@section('title', 'Virtual PBX')

<br>
<br>


<div class="container shadow rounded p-5">
 
<h3 style="font-weight:900;">In Use My Number<r/h3>
<br>
<br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">My Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>12345678909</td>
      <td><a type="button" href="{{ route('pbx_setting')}}" class="btn btn-outline-info">Settings</a></td>
    </tr>
    <tr>
      <td>2</td>
      <td>12345678909</td>
      <td><a type="button" href="{{ route('pbx_setting')}}" class="btn btn-outline-info">Settings</a></td>
    </tr>
  </tbody>
</table>
</div>

@endsection