@extends('layout')
@section('call_forwarding')
@section('title', 'Call Forwarding Manager')

<div class="container card rounded mt-5 p-5">
<section class="panel">
<div class="panel-body">

<form class="form-horizontal form-bordered ">
            <div class="form-group pt-3 ml-5 mt-5">
            <div class="col-lg-6 col-md-6"><label>Your Order ID / Number</label></div>
            <div class="col-lg-6 col-md-6">
            <p class="form-control-static"><label>
                  {{ $number_details->user->id ?? 'N/A' }}
            </label></p>
            </div>
            </div>
            <div class="form-group pt-3 ml-5">
            <div class="col-lg-6 col-md-6"><label>Changing Setting for  Number</label></div>
            <div class="col-lg-6 col-md-6">
            <p class="form-control-static"><label>
                  {{ $number_details->number ?? 'N/A' }}
            </label> </p>
            </div>
            </div>
            <div class="form-group pt-3 ml-5">
            <div class="col-lg-6 col-md-6"><label>Current Ring To Number / Address</label></div>
            <div class="col-lg-6 col-md-6">
            <p class="form-control-static"><label><img src="http://www.virtualphoneline.com/admins/image.php?id=280">&nbsp;PSTN: 03327951445 </label></p>
            </div>
            </div>
            <div class="form-group pt-3 ml-5">
            <div class="col-lg-6 col-md-6"><label>Your Talk Time Balance</label></div>
            <div class="col-lg-6 col-md-6">
            <p class="form-control-static"><label>
                  {{ $number_details->talktime ?? 'N/A' }}
                   </label></p>
            </div>
            </div>
            <div class="form-group pt-3 ml-5">
            <div class="col-lg-6 col-md-6"><label>Number Status</label></div>
            <div class="col-lg-6 col-md-6">
            <p class="form-control-static"><label>
                  {{ $number_details->is_active ?? 'N/A' }}
            </label></p>
            </div>
            </div>
            <div class="form-group pt-3 ml-5">
            <div class="col-lg-6 col-md-6"><label>Billing Plan</label></div>
            <div class="col-lg-6 col-md-6">
            <p class="form-control-static"><label>Pay As You Go</label></p>
            </div>
            </div>
            <div class="form-group pt-3 ml-5">
            <div class="col-lg-6 col-md-6"><label>Next Billing Date</label></div>
            <div class="col-lg-6 col-md-6">
            <p class="form-control-static"><label>08-December-2023</label></p>
            </div>
            </div>
            </form>



<div class="row m-3">
        <div class="col-md-12 mt-0 mx-auto equal-width">
            
                <div class="card-body mt-2 mb-1 mx-auto">
                    <div class="media mr-5">
                        <div class="media-body mt-3">
                            <p class="mt-0 ">Change forwarding to:</p>

                            <div class="form-inline ml-3 icon_div">
                           <p><button id="showForm8" class="icon-button"><i class="fas fa-phone-square-alt fa-icon"></i></button></p>
                           <p><button id="showForm9" class="icon-button"><span class="i-tt">SIP</span></button></p>
                           <p><button id="showForm10" class="icon-button"><span class="i-tt">IAX</span></button></p>
                           <p><button id="showForm11" class="icon-button"><span class="i-tt">IVR</span></button></p>
                           <p> <button id="showForm12" class="icon-button"><span class="i-tt"><i class="fas fa-fax fa-icon"></i> FAX</span></button></p>
                           <p><button id="showForm13" class="icon-button"><span class="i-tt">PBX</span></button></p>
                           <p><button id="showForm14" class="icon-button"><i class="fas fa-envelope fa-icon"></i></button></p>
                            </div>
                            <hr class="border-light">
                            <p class="mt-0 "><b> Change forwarding to:</p>
                                                      <form action="" id="form8">
                                                      <div class="form-inline">
                                                            <input class="mr-2" type="radio"><p class="mt-2">Number from phone <br> book</p>
                                                            <select class="ml-5" name="" id="">
                                                            <option selected value="">03132132223 -0- &nbsp;</option>
                                                            <option value="">434341134334</option>
                                                            <option value="">54425522554</option>
                                                            </select>
                                                      </div>
                                                      <div class="form-inline">
                                                            <input class="mr-2 " type="radio"><p class="mt-2 mr-1">Phone Forwarding :</p>
                                                            <select class="ml-5" name="" id="">
                                                            <option selected value="">1 - USA </option>
                                                            <option value="">1- Burmuda</option>
                                                            <option value="">1- Canada</option>
                                                            </select>
                                                            <p class="mr-5"></p>
                                                            <p class="mr-5"></p>
                                                            <input class="ml-3 form-control" type="text">
                                                            <input class="ml-1 form-control" type="text" placeholder=" (location)">
                                                            <p><a class="a_tag ml-2" href="#">Tip</a></p>
                                                      </div>
                                                      <div class="text-end mt-3">
                                                      <a class="btn btn-primary  ml-3" href="">Submit</a>
                                                      </div>
                                                      </form>
                                                                                          <form action="" id="form9" style="display: none;">
                                                                                                <div class="mt-2">
                                                                                                      <div class="row"> <!-- h-auto class added for automatic height adjustment -->
                                                                                                      <div class=" d-flex justify-content-between mt-3 ">
                                                                                                            <div class="col-6">
                                                                                                            <p class="card-text ml-4 form-inline"><button id="showForm2" class="icon-button"><span class="i-tt ">SIP</span></button></p>
                                                                                                            </div>
                                                                                                            <div class="col-6 form-inline">
                                                                                                            <p class="card-text mr-4"><input class="form-control" type="text"> <input class="ml-2" type="submit" value="Submit"></p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </form>

                                                                                          <form action="" id="form10" style="display: none;">
                                                                                                <div class="mt-2">
                                                                                                      <div class="row"> <!-- h-auto class added for automatic height adjustment -->
                                                                                                            <div class=" d-flex justify-content-between mt-3 ">
                                                                                                                  <div class="col-6">
                                                                                                                  <p class="card-text ml-4 form-inline"><button id="showForm3" class="icon-button"><span class="i-tt">IAX</span></button></p>
                                                                                                                  </div>
                                                                                                                  <div class="col-6 form-inline">
                                                                                                                  <p class="card-text mr-4"><input class="form-control" type="text"> <input class="ml-2" type="submit" value="Submit"></p>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </form>
                                                                                          
                                                                                          <form action="" id="form11" style="display: none;">
                                                                                                <div class="mt-2">
                                                                                                      <div class="row"> <!-- h-auto class added for automatic height adjustment -->
                                                                                                            <div class=" d-flex justify-content-between mt-3 ">
                                                                                                                  <div class="col-6">
                                                                                                                  <p class="card-text ml-4 form-inline"><p class="card-text ml-4"><button id="showForm3" class="icon-button"><span class="i-tt">IVR</span></button></p></p>
                                                                                                                  </div>
                                                                                                                  <div class="col-6 form-inline">
                                                                                                                  <p class="card-text mr-4"><input class="form-control" type="text"> <input class="ml-2" type="submit" value="Submit"></p>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </form>
                                                                                          <form action="" id="form12" style="display: none;">
                                                                                                <div class="mt-2">
                                                                                                      <div class="row"> <!-- h-auto class added for automatic height adjustment -->
                                                                                                            <div class=" d-flex justify-content-between mt-3 ">
                                                                                                                  <div class="col-6">
                                                                                                                  <p class="card-text ml-4 form-inline"><button id="showForm5" class="icon-button"><span class="i-tt"><i class="fas fa-fax fa-icon"></i> FAX</span></button></p>
                                                                                                                  </div>
                                                                                                                  <div class="col-6 form-inline">
                                                                                                                  <p class="card-text mr-4"><input class="form-control" type="text"> <input class="ml-2" type="submit" value="Submit"></p>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </form>
                                                                                          <form action="" id="form13" style="display: none;">
                                                                                                <div class="mt-2">
                                                                                                      <div class="row"> <!-- h-auto class added for automatic height adjustment -->
                                                                                                            <div class=" d-flex justify-content-between mt-3 ">
                                                                                                                  <div class="col-6">
                                                                                                                  <p class="card-text ml-4 form-inline"><button id="showForm6" class="icon-button"><span class="i-tt">PBX</span></button><span class="ml-2">Virtual PBX</span></p>
                                                                                                                  </div>
                                                                                                                  <div class="col-6 form-inline">
                                                                                                                  <p class="card-text mr-4"><input class="form-control" type="text"> <input class="ml-2" type="submit" value="Submit"></p>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </form>
                                                                                          <form action="" id="form14" style="display: none;">
                                                                                                <div class="mt-2">
                                                                                                      <div class="row"> <!-- h-auto class added for automatic height adjustment -->
                                                                                                            <div class=" d-flex justify-content-between mt-3 ">
                                                                                                                  <div class="col-6">
                                                                                                                  <p class="card-text ml-4 form-inline"><button id="showForm7" class="icon-button"><i class="fas fa-envelope fa-icon"></i></button><span class="ml-2">Voicemail Management</span></p>
                                                                                                                  </div>
                                                                                                                  <div class="col-6 form-inline">
                                                                                                                  <p class="card-text mr-4"><input class="form-control" type="text"> <input class="ml-2 " type="submit" value="Submit"></p>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
   
@endsection

