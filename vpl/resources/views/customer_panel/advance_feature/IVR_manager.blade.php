@extends('layout')
@section('IVR_manager')
@section('title', 'IVR Manager')



<style>
    .nav-pills .nav-link.active, .nav-pills .show > .nav-link
    {
        color:white;
        background-color:#0088cc;
    }

    .nav-link
    {
        color:black;
    }
    .nav-link:hover
    {
        color:#0088cc;
    }

    input[type=checkbox], input[type=radio] {
    box-sizing: border-box;
    padding: 0;
}
    

</style>

<br>
<br>
<br>
<div class="container">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Main Menu</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Voice File Management</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-file-tab" data-toggle="pill" data-target="#pills-file" type="button" role="tab" aria-controls="pills-file" aria-selected="false">Place Advertisement Files</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Primary Main Menu</th>
      <th scope="col">Select File Name </th>
      <th scope="col">Expand IVR in Menu</th>
      <th scope="col">Play No. Of Times</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">Sub Menu 1</td>
      <td>
      <select class="custom-select">
          <option selected>Select Menu</option>
          <option value="1">Return To Main Menu</option>
          <option value="2">Accept VoiceMail From Caller</option>
      </select>
      </td>

      <td><input style="" type="checkbox" aria-label="Checkbox for following text input"></td>
      <td><input type="number" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"></td>
    </tr>
    
    <tr>
      <td scope="row">Sub Menu 2</td>
      <td>
      <select class="custom-select">
          <option selected>Select Menu</option>
          <option value="1">Return To Main Menu</option>
          <option value="2">Accept VoiceMail From Caller</option>
      </select>
      </td>

      <td><input style="" type="checkbox" aria-label="Checkbox for following text input"></td>
      <td><input type="number" class="form-control"  aria-label="Username" aria-describedby="basic-addon1"></td>
    </tr>
    
  </tbody>
</table>
<hr>
<button type="button" class="btn btn-default mx-auto" style="color:white;background-color:#0088cc;display:flex;">Set IVR</button>
<hr>
<hr>
<p class="text-left"> <span class="text-danger font-weight-bolder">HELP:</span> Please Select Primary Menu File and then select the sub menus from the given menus voice files. By clicking the check box, you are telling the system that this is a menu.
If you uncheck the box then it will simply play the voice file and will not ask for any input.
You will be able to define sub menus by only clicking the options.</p>
<hr>
  </div>


  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  <div class="input-group mb-3">
  <div class="form-group">
    <input  type="file" class="form-control-file" id="exampleFormControlFile1" accept="audio/*">
  </div>
</div>
<br>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">File Name</th>
      <th scope="col">Upload Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">1</td>
      <td>1000232</td>
      <td>lorem</td>
      <td>24-Nov-2023</td>
      <td>dontknow</td>
    </tr>
  </tbody>
</table>


</div>     

  <div class="tab-pane fade" id="pills-file" role="tabpanel" aria-labelledby="pills-file-tab">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Select File Name</th>
      <th scope="col">Select Phone Number</th>
      <th scope="col">Priority</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>
        <select class="custom-select">
            <option selected>Select Menu</option>
            <option value="1">Return To Main Menu</option>
            <option value="2">Accept VoiceMail From Caller</option>
        </select>
      </td>
      <td>
           <select class="custom-select">
                <option selected>Select Menu</option>
                <option value="1">129947329875</option>
                <option value="2">875287362837</option>
                <option value="3">Global</option>
           </select>
      </td>
      <td>
      <button class="btn btn-success mr-2">Set IVR</button>
      <button class="btn btn-danger">Delete IVR</button>
      </td>
     
    </tr>
  </tbody>
</table>
</div>

</div>
</div>




@endsection