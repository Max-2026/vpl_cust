@extends('layout')
@section('UploadPBXIVR')
@section('title', 'Upload PBX')

<div class="container shadow rounded p-5 mt-4git ">
    <h2 style="font-weight:800;">Upload IVR for Virtual PBX</h2>
    <hr>
    <p>Please upload ".wav" files, 16 bit 8000 Hz Mono.</p>
    <hr>
    <br>
    <form>
  <div class="form-group">
    <input  type="file" class="form-control-file" id="exampleFormControlFile1" accept="audio/*">
  </div>
  <hr>
  <div class="form-group">
    <input  type="file" class="form-control-file" id="exampleFormControlFile1" accept="audio/*">
  </div>
  <hr>
  <div class="form-group">
    <input  type="file" class="form-control-file" id="exampleFormControlFile1" accept="audio/*">
  </div>
  <hr>
  <div class="form-group">
    <input  type="file" class="form-control-file" id="exampleFormControlFile1" accept="audio/*">
  </div>
  <hr>
  <div class="form-group">
    <input  type="file" class="form-control-file" id="exampleFormControlFile1" accept="audio/*">
  </div>
  <hr>
  <a href="#" type="button" class="btn btn-primarygit ">Submit</a>&nbsp;&nbsp;<a href="#" type="button" class="btn btn-danger">Reset</a>

</form>
</div>




@endsection