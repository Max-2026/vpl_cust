@extends('layout')




@section('content')

<style>
     .btn-info
    {
        border: 1px solid #0088cc;
    color:white;
    }

    .btn-info:hover
    {
        border: 1px solid #0088cc;
    color:white;
    background:#0088cc;
    }
</style>
<br>
<br>
<br>
<div class="container-fluid">
    <h2 style="font-weight:800;">Upload IVR for Virtual PBX</h2>
    <hr>
    <p>Please upload ".wav" files, 16 bit 8000 Hz Mono.</p>
    <hr>
    <br>
    <form>
  <div class="form-group">
    <input  type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <hr>
  <div class="form-group">
    <input  type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <hr>
  <div class="form-group">
    <input  type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <hr>
  <div class="form-group">
    <input  type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <hr>
  <div class="form-group">
    <input  type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <hr>
  <a href="#" type="button" class="btn btn-info">Submit</a>&nbsp;&nbsp;<a href="#" type="button" class="btn btn-danger">Reset</a>

</form>
</div>




@endsection