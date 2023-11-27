@extends('layout')
@section('change_call_forwarding')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#showForm1").click(function(e) {
                e.preventDefault();
                $("#form1").show();
                $("#form2").hide();
                $("#form3").hide();
            });

            $("#showForm2").click(function(e) {
                e.preventDefault();
                $("#form1").hide();
                $("#form2").show();
                $("#form3").hide();
            });

            $("#showForm3").click(function(e) {
                e.preventDefault();
                $("#form1").hide();
                $("#form2").hide();
                $("#form3").show();
            });
        });
    </script>


<style>
 
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
    height: 70px;
    width: 80px !important;
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
                            <p><img id="showForm1" src="http://virtualphoneline.com/admins/image.php?id=280"></p>
                            <p><img id="showForm2" src="http://virtualphoneline.com/admins/image.php?id=281"></p>
                            <p><img id="showForm3" src="http://virtualphoneline.com/admins/image.php?id=277"></p>
                            <p><img src="http://virtualphoneline.com/admins/image.php?id=287"></p>
                            <P><img src="http://virtualphoneline.com/admins/image.php?id=286"></P>
                            <P><img src="http://virtualphoneline.com/admins/image.php?id=279"></P>
                            <P><img src="http://virtualphoneline.com/admins/image.php?id=266"></P>
                            </div>
                            <hr class="border-light">
                            <p class="mt-0 "><b> Change forwarding to:</p>
                            <form action="" id="form1">
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
                            </form>

                            <form action="" id="form2" style="display: none;">
                            <div class="form-inline ml-5">
                                <input type="submit" value="SIP ">
                                <p class="mt-2 ml-4">SIP</p>
                            </div>
                            </form>

                            <form action="" id="form3" style="display: none;">
                                <h2>form3</h2>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection