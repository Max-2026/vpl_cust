@extends('layout')
@section('change_call_forwarding')

<style>
    body{
      background-color: rgba(245, 245, 245, 0.63);
    }
    .a_tag{

      text-decoration: none;
    }
    .equal-width {
        width: 100%;
    }
    
.btn{
    background-color:#0088cc;color:white
}
.i_b{
    height: 25px;
    font-size: 10px;
    width:50px;

}
</style>

<br>
<br>
<div class="container-fluid">
    <div class="row m-3">
        <div class="col-md-12 mt-0 mx-auto equal-width">
            <div class="card rounded">
                <div class="card-body mt-2 mb-1 mx-auto">
                    <div class="media mr-5">
                        
                        <div class="media-body mt-3">
                            <p class="mt-0">.'. If user does not have any number in his/her account.</p>
                            <p class="mt-3 ml-5"><b>You have not purchased any numbers yet.</b></p>
                            <h6 class="mt-3 ml-5"><a class="a_tag " href="#">Click here to Buy Phone Numbers.</a></h6>
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
                            <div class="form-inline">
                            <p><img src="images/icons/icon1.png" alt=""height="40px" width="40px"></p>
                            <button class="i_b">Sip</button>
                            <button class="i_b ml-1">IAX</button>
                            <button class="i_b ml-1">IVR</button>

                            </div>
                            <hr class="border-light">
                            <p class="mt-0 "> <b> Change forwarding to:</p>
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
                                <input class="ml-3" type="text">
                                <input class="ml-1" type="text" placeholder=" (location)">
                                <p><a class="a_tag ml-2" href="#">Tip</a></p>
                            </div>
                            <div class="text-end mt-3">
                            <a class="btn  ml-3" href="">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection