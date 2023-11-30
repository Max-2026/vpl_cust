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
    <div class="card rounded">

        <div class="col-md-8 offset-md-2">
            <form>
                <div class="form-group row mb-0">
                    <label for="orderID" class="col-sm-4 col-form-label text-right mt-2">Order ID</label>
                    <div class="col-sm-8">
                        <p class="pt-3">1005729</p>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <label for="balance" class="col-sm-4 col-form-label text-right">Available Balance</label>
                    <div class="col-sm-8">
                        <p class="pt-2">138.34</p>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <label for="talkTimeType" class="col-sm-4 col-form-label text-right">Talk Time Type</label>
                    <div class="col-sm-8">
                        <select class="form-select" id="talkTimeType">
                            <option>TalkTime Individual Number</option>
                            <!-- Add more options here if needed -->
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <label for="talkTimeType" class="col-sm-4 col-form-label text-right">Virtal Phone Number</label>
                    <div class="col-sm-8">
                        <select class="form-select" id="talkTimeType">
                            <option>12025521527</option>
                            <!-- Add more options here if needed -->
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <label for="addTalkTime" class="col-sm-4 col-form-label text-right">Add Talk Time ($)</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="addTalkTime">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-sm-8 offset-sm-4">
                        <button type="submit" class="btn btn-default" style="background-color: #0088cc;color:white">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>



@endsection