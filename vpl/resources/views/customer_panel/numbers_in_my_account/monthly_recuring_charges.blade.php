@extends('layout')
@section('monthly_recuring_charges')
@section('title', 'Monthly Recurring Charges')
<div class="container shadow rounded p-5 mt-5">
<table class="table table-bordered">
    <thead>
        <th  class="form-control" style="width: 165.4%;">Billing Conversion (Go from Monthly to Annual)</th>
    </thead>
    <tbody >
      <tr >
        <td>Telephone Number:</td>
        <td>12025521553</td>
        
      </tr>
      <tr>
        <td>Currently Billing On</a></td>
        <td>Monthly Recurring</td>
        
      </tr>
      <tr>
        <td>Monthly Price</td>
        <td>$5.99</td>
        
      </tr> 
        <tr>
        <td>Annual Price</td>

        <td>$71.88</td>
        
      </tr>
      <tr>
        <td>Annual Billing Period Will Be</td>

        <td>08-Dec-2023 to 07-Dec-2024</td>
        
      </tr>
      <tr>
        <td>Amount in Hand</a></td>

        <td>$106.34</td>
      
      </tr>
      <tr>
        <td>Total Amount To Pay</td>
        <td>$71.88</td>
       
      </tr>
      
    </tbody>
  </table>
  <div class="text-center mb-5 mt-4">
    <input class="btn btn-primary" style = "background-color:#0088cc;color:white" type="submit" value="Submit">
    
  </div>
</div>

@endsection