@extends('layout')
@section('view_all_my_number')

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
 
    .a_tag{

      text-decoration: none;
    }
    .equal-width {
        width: 100%;
    }
    .img-icon{
        height: 50px !important;
        width: 60px !important;
    }
    

</style>

<br>
<br>
<div class="container-fluid">
    <div class="row m-3">
        <div class="col-md-12 mt-0 mx-auto equal-width">
            <div class="card ">
                <div class="card-body mt-2 mb-1 mx-auto">
                    <div class="media mr-5">
                        <img src="images/play.png" class="mr-5" alt="Image 1" height="100px">
                        <div class="media-body mt-3">
                            <p class="mt-0">Watch Video Tutorial</p>
                            <h4><a class="a_tag" href="#">How to change Ring to Number?</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-3">
        <div class="col-md-12 mt-4 mx-auto equal-width">
            <div class="card">
                <div class="card-body mt-2 mb-1 mx-auto table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Virtual Number</th>
                                <th>call log</th>
                                <th>Country Area</th>
                                <th>Forwarded To</th>
                                <th>Forwarding Type</th>
                                <th>Forwarded Charges</th>
                                <th>Talk Time Balance</th>
                                <th>Calling Plan</th>
                                <th>Number Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="{{ route('my_number.number_in_my_account')}}">12025521553</a></td>
                                <td><a href="{{ route('my_number.call_log')}}">View</a></td>
                                <td>USA - Washington; D.C.</td>
                                <td><a href="{{route  ('numbers_in_my_account.call_forwading_manager') }}">03327951445</a></td>
                                <td><img class="img-icon" src="images/icons/icon1.gif" alt=""></td>
                                <td>$0.01</td>
                                <td>$0 $9 Master TalkTime</td>
                                <td><a href="{{ route('my_number.pakage_plan') }}">Switch To Plan</a></td>
                                <td>Active Permanent</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="#">12025521553</a></td>
                                <td><a href="#">View</a></td>
                                <td>USA - Washington; D.C.</td>
                                <td><a href="#">03327951445</a></td>
                                <td>icon</td>
                                <td>$0.01</td>
                                <td>$0 $9 Master TalkTime</td>
                                <td><a href="#">Switch To Plan</a></td>
                                <td>Active Permanent</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection