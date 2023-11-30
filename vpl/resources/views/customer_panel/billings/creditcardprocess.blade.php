@extends('layout')
@section('creditcardprocess')
@section('title', 'Credit Card Process')
<br>

<br>    
<div class="container-fluid">
    <div class="card rounded">
        <div class="card-body">
            <h5 class="card-title">Card Authorization and Charging</h5>
            <p class="card-text">We tried to charge <strong>$10</strong> amount from your Credit Card</p>
            <p class="card-text">Credit Card Authorization was <strong>Failed</strong></p>
            <p class="card-text">Credit Card Charging was <strong>Failed</strong></p>
            <p class="card-text">This transaction was <strong>Decline</strong></p>
            <p class="card-text"><strong>AVS Code: Not Available</strong></p>
            <p class="card-text"><strong>Bank Declined Transaction.</strong></p>
        </div>
    </div>
</div>


@endsection