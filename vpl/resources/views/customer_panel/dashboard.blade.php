@extends('layout')
@section('dashboard')
@section('title', 'Dashboard')
<br>
<br>
<div class="container-fluid">
  <div class="row m-3">
    <div class="col-md-6">
      <div class="card rounded">
        <div class="card-body">
          <h5 class="card-title">Balance</h5>
          <p class="card-text">
            <span class="h3">${{ $user->balance ?? 'N/A' }}</span>
            <hr>
          </p>
          <a class="dash_btn" style="float:right;" href="{{ route('add_funds')}}">ADD FUNDS</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card rounded">
        <div class="card-body">
          <h5 class="card-title">Master Talk Time</h5>
          <p class="card-text">
            <span class="h3">${{ $user->talktime ?? 'N/A' }}</span>
            <hr>
          </p>
          <a href="{{ route('add_talktime')}}" class="dash_btn" style="float:right;">ADD TALK TIME</a>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<!-- <div class="container-fluid">
  <div class="row m-3">
    <div class="col-md-6">
      <div class="card rounded">
        <div class="card-body">
          <h5 class="card-title">Individual Talk Time</h5>
          <p class="card-text">
            <span class="h3">$9.56</span>
            <hr>
          </p>
          <a href="{{ route('add_talktime')}}" class="dash_btn" style="float:right;">ADD TALK TIME</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card rounded">
        <div class="card-body">
          <h5 class="card-title">Voice Mail</h5>
          <p class="card-text">
            <span class="h3">$187.33</span>
            <hr>
          </p>
          <a href="{{ route('voice_messages')}}" class="dash_btn" style="float:right;">GO TO VOICE MAILS</a>
        </div>
      </div>
    </div>
  </div>
</div> -->
<div class="container-fluid">
  <div class="row m-3">
    <div class="col-md-6">
      <div class="card rounded">
        <div class="card-body">
          <a class="card-title" style="color:#0088cc;text-decoration:none;" data-bs-toggle="collapse" href="#ann" aria-expanded="false" aria-controls="ann">Announcements</a>
          <p class="card-text" id="ann">
            <br>
            <br>
            <span class="h6 text-muted">- 25 March 2015</span>
            <hr>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card rounded ">
        <div class="card-body">
          <a class="card-title" style="color:#0088cc;text-decoration:none;" data-bs-toggle="collapse" href="#adv" aria-expanded="false" aria-controls="adv">Advertisement</a>
          <p class="card-text" id="adv">
            <br>
            <br>
            <a class="h5">Join The Virtual Phone Line Facebook Page!</a>
            <hr>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
