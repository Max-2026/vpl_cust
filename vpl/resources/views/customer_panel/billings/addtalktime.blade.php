@extends('layout')
@section('addtalktime')
@section('title', 'Add TalkTime')

<br>
<br>

<div class="container">
    <div class="row m-4">
        <div class="col-md-12 mt-0 mx-auto equal-width">
            <div class="card rounded">
                <div class="card-body mt-2 mb-1 mx-auto">
                    <div class="media mr-5">
                        <img src="images/play.png" class="mr-5" alt="Image 1" height="100px">
                        <div class="media-body mt-3">
                            <h3 class="mt-0">Watch Video Tutorial</h3>
                            <h3 class="text-center"><a class="a_tag " href="#">How to Add Talk Time?</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row m-5">
        <div class="card rounded p-5">

            <div class="col-md-8 offset-md-2">
                <form method="POST" action="{{ route('add_talktime_submit') }}">
                    @csrf
                    <div class="form-group row mb-0">
                        <label for="orderID" class="col-sm-4 col-form-label text-right mt-2">Order ID</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="orderID" name="order_id"
                                value="{{ $user->id }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <label for="balance" class="col-sm-4 col-form-label text-right">Available Balance</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="balance" name="balance"
                                value="$ {{ $user->balance ?? 'N/A' }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <label for="talkTimeType" class="col-sm-4 col-form-label text-right">Talk Time Type</label>
                        <div class="col-sm-8">
                            <select class="form-select" id="talkTimeType" name="talk_time_type"
                                onchange="toggleVirtualNumberInput()">
                                <option>TalkTime Individual Number</option>
                                <option>Master Talk Time</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-0" id="virtualNumberInput">
                        <label for="virtualPhoneNumber" class="col-sm-4 col-form-label text-right">Virtual Phone
                            Number</label>
                        <div class="col-sm-8">
                            <select class="form-select" id="virtualPhoneNumber" name="number_id">
                                @foreach ($numbers as $number)
                                    <option value="{{ $number->id }}">
                                        {{ $number->number }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <label for="addTalkTime" class="col-sm-4 col-form-label text-right">Add Talk Time ($)</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="addTalkTime" name="add_talk_time" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-sm-8 offset-sm-4">
                            <button type="submit" class="btn btn-default"
                                style="background-color: #0088cc;color:white">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleVirtualNumberInput() {


        var talkTimeType = document.getElementById("talkTimeType").value;
        var virtualNumberInput = document.getElementById("virtualNumberInput");
        if (talkTimeType === "TalkTime Individual Number") {
            virtualNumberInput.style.display = "block";
        } else {
            virtualNumberInput.style.display = "none";
        }
    }
</script>

@endsection