@extends('layout')
 





@section('content')
<br>
<br>

<div class="container shadow pt-4 pb-4">
  <div class="row">
    <div class="col-lg-8 offset-lg-2">
      <form>
        <fieldset>
          <legend>Voicemail Preferences</legend>
          <div class="form-group row">
<<<<<<< Updated upstream
            <label for="userID" class="col-md-4 col-form-label">User ID</label>
=======

            <label for="userID" class="col-md-4 col-form-label text-right">User ID</label>
            <label for="userID" class="col-md-4 col-form-label text-left">User ID</label>

>>>>>>> Stashed changes
            <div class="col-md-6">
              <p class="form-control-static mt-3">1005729</p>
            </div>
            </div>
            <div class="form-group row">
<<<<<<< Updated upstream
            <label for="selectPhone" class="col-md-4 col-form-label text-left">Select Phone Number</label>
=======

            <label for="selectPhone" class="col-md-4 col-form-label text-right">Select Phone Number</label>

            <label for="selectPhone" class="col-md-4 col-form-label text-left">Select Phone Number</label>

>>>>>>> Stashed changes
            <div class="col-md-6">
              <select class="form-control" id="selectPhone">
                <option selected>12025521553</option>
                <!-- Other options -->
              </select>
            </div>
          </div>
          <div class="form-group row">
<<<<<<< Updated upstream
            <label for="password" class="col-md-4 col-form-label text-left">Voice Mailbox Password</label>
=======

            <label for="password" class="col-md-4 col-form-label text-right">Voice Mailbox Password</label>

            <label for="password" class="col-md-4 col-form-label text-left">Voice Mailbox Password</label>

>>>>>>> Stashed changes
            <div class="col-md-6">
                <input type="password" class="form-control" id="password" placeholder="*****">
            </div>
            </div>

            <div class="form-check" style="margin-left: 20px;">
                <input class="form-check-input" type="radio" name="voicemailOptions" id="noVoicemail" value="noVoicemail" checked>
                <label class="form-check-label" for="noVoicemail">
                    No Voicemail
                </label>
                </div>
<<<<<<< Updated upstream
=======



>>>>>>> Stashed changes
           <br>
           <br>
          <fieldset class="form-group">
            <legend>Go to Voice Mail on</legend>
<<<<<<< Updated upstream
            <div class="form-check" style="margin-left: 20px;">
            <br>
            <div class="form-check mt-5" style="margin-left: 20px;">
=======

            <div class="form-check" style="margin-left: 20px;">

            <br>
            <div class="form-check mt-5" style="margin-left: 20px;">

>>>>>>> Stashed changes
              <input class="form-check-input" type="radio" name="voicemailOptions" id="noAnswer" value="noAnswer">
              <label class="form-check-label" for="noAnswer">
                No Answer (BETA)
              </label>
            </div>
<<<<<<< Updated upstream
            <br>
            <div class="form-check " style="margin-left: 20px;">
=======

            <div class="form-check" style="margin-left: 20px;">

            <br>
            <div class="form-check " style="margin-left: 20px;">

>>>>>>> Stashed changes
              <input class="form-check-input" type="radio" name="voicemailOptions" id="allCalls" value="allCalls">
              <label class="form-check-label" for="allCalls">
                All Calls
              </label>
            </div>
          </fieldset>
          <div class="text-center">
<<<<<<< Updated upstream
          <button class="btn btn-default" style="background-color: #0088cc;color:white">Update</button>
=======

            <button type="submit" class="btn btn-primary">Update</button>

          <button class="btn btn-default" style="background-color: #0088cc;color:white">Update</button>

>>>>>>> Stashed changes
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>



@endsection