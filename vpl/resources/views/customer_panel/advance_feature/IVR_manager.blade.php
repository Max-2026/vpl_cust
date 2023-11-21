@extends('layout')



@section('content')


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
    <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">IVR Tree</button>
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
    main
  </div>

  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    ivr
</div>

  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    voice
</div>     

  <div class="tab-pane fade" id="pills-file" role="tabpanel" aria-labelledby="pills-file-tab">
    file
</div>

</div>
</div>




@endsection