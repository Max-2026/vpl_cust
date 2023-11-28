<style>
.ticket-container {
max-width: 1200px;
margin: auto;

border: 1px solid #dee2e6;
border-radius: 0.25rem;
}

.archive-btn {
text-align: right;
}
/* Add a blue link style */
.blue-link {
  color: #007bff; /* Blue color */
  text-decoration: underline; /* Underline the text */
  cursor: pointer; /* Change cursor to a hand pointer on hover (optional) */
}

/* Change link color on hover (optional) */
.blue-link:hover {
  color: #0056b3; /* Darker blue on hover */
}
.div-line {
  border-bottom: 1px solid #dee2e6;
  padding-bottom: 10px;
  margin-bottom: 10px;
}

</style>
@extends('layout')

@section('content')

<div class="mt-5 ml-5">

<table class="table" >
    <thead>
      <tr>
        <th scope="col" class="form-control" style="width: 200%;">Billing Conversion (Go from Monthly to Annual)</th>
    <br>
       
      </tr>
    </thead>
    <tbody >
      <tr >
        <td>Telephone Number:</td>
        <td></td>
        <td>12025521553</td>
        
      </tr>
      <tr>
        <td>Currently Billing On</a></td>
        <td></td>
        <td>Monthly Recurring</td>
        
      </tr>
      <tr>
        <td>Monthly Price</td>
        <td></td>
        <td>$5.99</td>
        
      </tr> 
        <tr>
        <td>Annual Price</td>
        <td></td>
        <td>$71.88</td>
        
      </tr>
      <tr>
        <td>Annual Billing Period Will Be</td>
        <td></td>
        <td>08-Dec-2023 to 07-Dec-2024</td>
        
      </tr>
      <tr>
        <td>Amount in Hand</a></td>
        <td></td>
        <td>$106.34</td>
      
      </tr>
      <tr>
        <td>Total Amount To Pay</td>
        <td></td>
        <td>$71.88</td>
       
      </tr>
      
    </tbody>
  </table>
  <div class="text-center mb-5 mt-4">
    <input class="btn btn-primary" style = "background-color:#0088cc;color:white" type="submit" value="Submit">
    
  </div>
</div>

@endsection