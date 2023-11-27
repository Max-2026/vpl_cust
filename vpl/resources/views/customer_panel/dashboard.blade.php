@extends('layout')



@section('content')



<style>
    .dash_btn
    {
        color:#0088cc;
        text-decoration:none;

    }


    .dash_btn:hover
    {
        color:#0088cc;
        text-decoration:underline;
    }

    

</style>

<br>
<br>
<div class="container-fluid">
    <div class="row m-3">
      <div class="col-md-6">
      <div class="card rounded">
        <div class="card-body">
          <h5 class="card-title">Amount Overpaid</h5>
          <p class="card-text">
            <span class="h2">$144.33</span>
            <hr>
          </p>
          <a class="dash_btn" href="{{ route('Billings.addfunds')}}">ADD FUNDS</a>
        </div>
      </div>
                        </div>



                        <div class="col-md-6">
                        <div class="card rounded">
        <div class="card-body">
          <h5 class="card-title">Master Talk Time</h5>
          <p class="card-text">
            <span class="h2">9.79</span>
            <hr>
          </p>
          <a href="{{ route('Billings.mastertalktime')}}" class="dash_btn">ADD TALK TIME</a>
        </div>
      </div>
                        </div>
    </div>
</div>

<br>

<div class="container-fluid">
    <div class="row m-3">
                    <div class="col-md-6">
                    <div class="card rounded">
                        <div class="card-body">
                        <h5 class="card-title">Individual Talk Time</h5>
                        <p class="card-text">
                            <span class="h2">9.56</span>
                            <hr>
                        </p>
                        <a href="{{ route('Billings.mastertalktime')}}" class="dash_btn">ADD TALK TIME</a>
                        </div>
                    </div>
                    </div>


                    <div class="col-md-6">
                    <div class="card rounded">
        <div class="card-body">
          <h5 class="card-title">Voice Mail</h5>
          <p class="card-text">
            <span class="h2">187.33</span>
            <hr>  
        </p>
          <a href="{{ route('advance_feature.voicemessages')}}" class="dash_btn">GO TO VOICE MAILS</a>
        </div>
      </div>
        </div>
    </div>
</div>






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
                        <a class="card-title"  style="color:#0088cc;text-decoration:none;" data-bs-toggle="collapse" href="#adv" aria-expanded="false" aria-controls="adv">Advertisement</a>
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
