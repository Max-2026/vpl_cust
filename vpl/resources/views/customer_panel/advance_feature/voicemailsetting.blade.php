@extends('layout')
@section('voicemailsetting')
@section('title', 'Voice Mail Setting')
<br>
<br>

<div class="container shadow rounded pt-5 pb-4">
  <div class="row">
    <div class="col-lg-8 offset-lg-2">
      <form>
        <fieldset>
          <legend>Voicemail Preferences</legend>
          <div class="form-group row mb-0">
            <label for="userID" class="col-md-4 col-form-label mt-3">User ID</label>
            <div class="col-md-6">
              <p class="form-control-static mt-3">1005729</p>
            </div>
            </div>
            <div class="form-group row mb-0">
            <label for="selectPhone" class="col-md-4 col-form-label text-left">Select Phone Number</label>
            <div class="col-md-6">
              <select class="form-select" id="selectPhone">
                <option selected>12025521553</option>
                <!-- Other options -->
              </select>
            </div>
          </div>
          <div class="form-group row mb-0">
            <label for="password" class="col-md-4 col-form-label text-left">Voice Mailbox Password</label>
            <div class="col-md-6">
                <input type="password" class="form-control" id="password" placeholder="*****">
            </div>
            </div>

            <div class="form-check mb-0" style="margin-left: 20px;">
                <input class="form-check-input" type="radio" name="voicemailOptions" id="noVoicemail" value="noVoicemail" checked>
                <label class="form-check-label" for="noVoicemail">
                    No Voicemail
                </label>
                </div>
          <br>
          <fieldset class="form-group">
            <legend>Go to Voice Mail on</legend>
            <div class="form-check" style="margin-left: 20px;">
             <br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="voicemailOptions" id="noAnswer" value="noAnswer">
              <label class="form-check-label" for="noAnswer">
                No Answer (BETA)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="voicemailOptions" id="allCalls" value="allCalls">
              <label class="form-check-label" for="allCalls">
                All Calls
              </label>
            </div>
          </fieldset>
          <div class="text-center">
          <button class="btn btn-default" style="background-color: #0088cc;color:white">Update</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>



@endsection