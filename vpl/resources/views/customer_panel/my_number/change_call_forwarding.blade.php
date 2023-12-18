@extends('layout')
@section('change_call_forwarding')
@section('title', 'Call Forwarding')


<br>
<br>
<div class="container">
    <div class="row m-3">
        <div class="col-md-12 mt-0 mx-auto equal-width">
            <div class="card rounded">
                <div class="card-body mt-2 mb-1 mx-auto">
                    <div class="media mr-5">
                        
                        <div class="media-body mt-3">
                            <p class="mt-0">.'. If user does not have any number in his/her account.</p>
                            <p class="mt-3 ml-5"><b>You have not purchased any numbers yet.</b></p>
                            <h6 class="mt-3 ml-5"><a class="a_tag " href="{{ route('buy_number') }}">Click here to Buy Phone Numbers.</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-3">
        <div class="col-md-12 mt-0 mx-auto equal-width">
            <div class="card rounded">
                <div class="card-body mt-2 mb-1 mx-auto">
                    <div class="media mr-5">
                        <div class="media-body mt-3">
                            <p class="mt-0 text-center">Your Order Number Is :  1005729</p>
                            <hr class="border-light">
                            <p class="mt-0 "><b>Note:</b> This page will change forwarding for all the purchased numbers in your account. To change the forwarding on single number, go to My Numbers page and click on the desired number which will give you general number information. Click on 'Change Forwarding' for call forwarding management of that number.</p>
                            <p class="mt-0"><i class="fa-solid fa-tty"></i></p>
                            <hr class="border-light">
                            <p class="mt-0 ">Change forwarding to:</p>

                            <div class="form-inline ml-3 icon_div">
                           <p><button id="showForm1" class="icon-button"><i class="fas fa-phone-square-alt fa-icon"></i></button></p>
                           <p><button id="showForm2" class="icon-button"><span class="i-tt">SIP</span></button></p>
                           <p><button id="showForm3" class="icon-button"><span class="i-tt">IAX</span></button></p>
                           <p><button id="showForm4" class="icon-button"><span class="i-tt">IVR</span></button></p>
                           <p> <button id="showForm5" class="icon-button"><span class="i-tt"><i class="fas fa-fax fa-icon"></i></span></button></p>
                           <p><button id="showForm6" class="icon-button"><span class="i-tt">PBX</span></button></p>
                           <p><button id="showForm7" class="icon-button"><i class="fas fa-envelope fa-icon"></i></button></p>
                            </div>
                            <hr class="border-light">
                            <p class="mt-0 "><b> Change forwarding to:</p>
                            <form action="" id="form1">
                            <div class="form-inline">
                               <input class="mr-2" name="forwards_type" type="radio"><p class="mt-2">Number from phone <br> book</p>
                               <select class="ml-5" name="" id="">
                                <option selected value="">03132132223 -0- &nbsp;</option>
                                <option value="">434341134334</option>
                                <option value="">54425522554</option>
                               </select>
                            </div>
                            <div class="form-inline">
                               <input class="mr-2 " name="forwards_type" type="radio"><p class="mt-2 mr-1">Phone Forwarding :</p>
                                <select class="ml-5" name="" id="">
                                @foreach ($countries as $country)
                                <option value="{{ $country->id }}" data-show-form="{{ $country->id }}">
                                    {{ $country->code }} - {{ $country->name }}
                                </option>
                                @endforeach
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
                            <form action="" id="form2" style="display: none;">
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

                            <form action="" id="form3" style="display: none;">
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
                            <form action="" id="form4" style="display: none;">
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
                            <form action="" id="form5" style="display: none;">
                                <div class="mt-2">
                                        <div class="row"> <!-- h-auto class added for automatic height adjustment -->
                                            <div class=" d-flex justify-content-between mt-3 ">
                                                <div class="col-6">
                                                <p class="card-text ml-4 form-inline"><button id="showForm5" class="icon-button"><span class="i-tt"><i class="fas fa-fax fa-icon"></i></span></button></p>
                                                </div>
                                                <div class="col-6 form-inline">
                                                <p class="card-text mr-4"><input class="form-control" type="text"> <input class="ml-2" type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                 </div>

                            </form>
                            <form action="" id="form6" style="display: none;">
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
                            <form action="" id="form7" style="display: none;">
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