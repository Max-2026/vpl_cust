@extends('layout')
@section('view_all_my_number')
@section('title', 'All My Numbers')
<br>
<br>
<div class="container">
<div class="row justify-content-center align-items-center">
    <div class="row m-3">
        <div class="col-md-12 mt-0 mx-auto equal-width">
            <div class="card rounded">
                <div class="card-body mt-2 mb-1 mx-auto">
                    <div class="media mr-5">
                        <img src="images/play.png" class="mr-5" alt="Image 1" height="100px">
                        <div class="media-body mt-3">
                            <h3 class="mt-0">Watch Video Tutorial</h3>
                            <h3 class="text-center"><a class="a_tag " href="#">How to Change Ring to Number?</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pt-3 mt-5">
<div class="row">
<div class="col-md-12">
<table class="table table-bordered table-responsive">
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
                                <th>Paid Till Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="{{ route('my_numbers')}}">12025521553</a></td>
                                <td><a href="{{ route('call_logs')}}">View</a></td>
                                <td>USA - Washington; D.C.</td>
                                <td><a href="{{ route('call_forwading_setting') }}">03327951445</a></td>
                                <td><a href="#">03327951445</a></td>

                                <td><i class="fas fa-phone-square-alt"></i></td>
                                <td>$0.01</td>
                                <td>$0 $9 Master TalkTime</td>
                                <td><a href="{{ route('package') }}">Switch To Plan</a></td>
                                <td>08-Nov-2020</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="#">12025521553</a></td>
                                <td><a href="#">View</a></td>
                                <td>USA - Washington; D.C.</td>
                                <td><a href="#">03327951445</a></td>
                                <td><i class="fas fa-phone-square-alt"></i></td>
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



@endsection



