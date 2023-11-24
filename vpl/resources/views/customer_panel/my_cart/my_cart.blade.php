@extends('layout')

@section('content')
<style>
    
 /* Reset some default styles */
 * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    /* General styles for the panel */
    .panel {
        background: transparent;
        box-shadow: none;
        border: none;
        margin-bottom: 20px;
        background-color: #ffffff;
        border-radius: 4px;
    }

    /* Styles for the invoice section */
    .invoice {
        margin-top: 20px;
    }

    .invoice h2 {
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }

    /* Table styles */
    .table.invoice-items th,
    .table.invoice-items td {
        font-size: 12px;
        text-align: center;
    }

    .table.invoice-items th {
        background-color: #f5f5f5;
    }

    .table.invoice-items tbody tr:nth-child(odd) {
        background-color: #ffffff;
    }

    .table.invoiceis-items tbody tr:nth-child(even) {
        background-color: #f5f5f5;
    }

    /* Button style */
    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }
</style>
<br><br>
<div class="container-fluid">
    <div class="card rounded">
        <div class="card-body" >
<div class="panel-body ">
            <div class="invoice">
                <header class="clearfix">
                    <div class="row">
                        <div class="col-sm-6 mt-md">
                            <h2 class="h2 mt-none mb-sm text-dark text-bold">MY CART</h2>

                        </div>

                    </div>
                </header>

                <div class="" style="overflow-x: auto;">
                    <table class="table invoice-items">

                        <thead>

                        <tr class="h4 text-dark">
                            <th width="12%"><div style="align:left;font-size:1;">Phone Number</div></th>
                            <th width="13%"><div style="align:left;font-size:1;">Area</div></th>
                            <th width="11%"><div style="align:left;font-size:1;">Country</div></th>
                            <th width="5%"><div style="align:left;font-size:1;">Billing Type</div></th>
                            <th width="6%"><div style="align:left;font-size:1;">1 Time Setup Charge</div></th>
                            <th width="6%"><div style="align:left;font-size:1;">Monthly Charge</div></th>
                            <th width="5%"><div style="align:left;font-size:1;">Annual Charge</div></th>
                            <th width="9%"><div style="align:left;font-size:1;">Talk Time</div></th>
                            <th width="6%"><div style="align:left;font-size:1;">Plan monthly</div></th>
                            <th width="6%"><div style="align:left;font-size:1;">Plan Setup</div></th>
                            <th width="8%"><div style="align:left;font-size:1;">Total Charges</div></th>
                            <th width="8%"><div style="align:left;font-size:1;">User Documents</div></th>
                            <th width="6%"><div style="align:left;font-size:1;">Action</div></th>
                        </tr>

                        </thead>
                        <tbody>

                        
			<tr style="bgcolor:#ffffff;"> 
          <td class="simple">34-91-003-6526</td>
          <td class="simple" style="align:center;">Madrid</td>
          <td class="simple" style="align:center;">Spain</td>
          
          <td class="simple" style="align:center;">Annual</td>
          <td class="simple" style="align:center;">1</td>
          <td class="simple" style="align:center;">0</td>
          <td class="simple" style="align:center;">77</td>
          <td class="simple" style="align:center;">0</td>
          <td class="simple" style="align:center;">0</td>
          <td class="simple" style="align:center;">0</td>
          <td class="simple" style="align:center;">78</td>
          <td class="simple" style="align:center;">Pending Approval</td>
          <td class="simple" style="align:center;"><a href="RemoveFromCart.php?DID=34910036526">Remove</a></td>
        </tr>
       
    
    <tr style="bgcolor:;">
          <td class="simple">&nbsp;</td>
          <td class="simple">&nbsp;</td>
          <td class="simple">&nbsp;</td>
          <td class="simple" style="align:center;"><strong>&nbsp;</strong></td>
          <td class="simple" style="align:center;"><strong>&nbsp;</strong></td>
          <td class="simple" style="align:center;"><strong>&nbsp;</strong></td>
          <td class="simple" style="align:center;">&nbsp;</td>
          <td class="simple" style="align:center;">&nbsp;</td>
          <td class="simple" style="align:center;">&nbsp;</td>
          <td class="simple" style="align:center;">&nbsp;</td>
          <td class="simple" style="align:center;">&nbsp;</td>
          <td class="simple" style="align:center;">&nbsp;</td>
          <td class="simple" style="align:center;">&nbsp;</td>
          
        </tr>
			<tr >
          <td class="simple" style="align:left;"><strong>Total</strong></td>
          <td class="simple">&nbsp;</td>
          <td class="simple">&nbsp;</td>
          
          <td class="simple" style="align:left;">&nbsp;</td>
          
          <td class="simple" style="align:center;"><strong>$1</strong></td>
          <td class="simple" style="align:center;"><strong>$0</strong></td>
          
          <td class="simple" style="align:center;"><strong>$77</strong></td>
          <td class="simple" style="align:center;"><strong>$0</strong></td>
          
          <td class="simple" style="align:center;"><strong>$0</strong></td>
          <td class="simple" style="align:center;"><strong>$0</strong></td>
          <td class="simple">&nbsp;</td>
          <td class="simple">&nbsp;</td>
          <td class="simple">&nbsp;</td>
          
        </tr></tbody></table>

            </td>
        </tr>
      </tbody></table> 
        

                        
                    
                </div>
                <div>
       <table width="100%" border="0" cellpadding="1" cellspacing="1">
        <tbody><tr style="bgcolor:;">
        <td class="simple" style="align:left;" colspan="9"><strong>Grand Total</strong></td>
         
          <td class="simple" align="right"><strong>$78</strong></td>
          
        </tr>
        <tr style="bgcolor:;">
          <td class="simple" style="align:left;" colspan="9"><strong>Available funds in your account</strong></td>
         
          <td class="simple" align="right"><strong>$138.34</strong></td>
        </tr>
        <tr style="bgcolor:;">
          <td class="simple" style="align:left;" colspan="9"><strong>Total Amount To Pay</strong></td>
         
          <td class="simple" align="right"><strong>$78</strong></td>
        </tr>
        
        
        <tr style="bgcolor:;">
          <td class="simple" style="align:left;" colspan="9">You will not be able to buy any number that requires documents approval.</td>
         
          <td class="simple" align="right"><strong>&nbsp;</strong></td>
        </tr>
        
        <tr style="bgcolor:;">
          <td class="simple" style="align:left;" colspan="9">The Number will be added to your account automatically once your provided documents are approved.</td>
         
          <td class="simple" align="right">&nbsp;</td>
        </tr>
        
        <tr style="bgcolor:;">
          <td class="simple" style="align:left;" colspan="9">If document does not get an approval, you will be notified by an email and it will not be added to your account.</td>
         
          <td class="simple" align="right">&nbsp;</td>
        </tr>
        
        </tbody></table>
        <table width="20%" border="0" align="right">
        <tbody><tr>
          <td height="45" align="right"> 

                  
	<form name="form1" method="post" action="">

<div class="text-right mr-lg">
<input type="submit" class="btn btn-primary" name="Submit" value="Checkout">
</div>
</form>

</div>
                <!--<div class="invoice-summary">-->
                    <!--<div class="row">-->
                        <!--<div class="col-sm-4 col-sm-offset-8">-->
                            <!--<table class="table h5 text-dark">-->
                                <!--<tbody>-->

                                <!--<tr class="h4">-->
                                    <!--<td colspan="2">Grand Total</td>-->
                                    <!--<td class="text-left">$200.00</td>-->
                                <!--</tr>-->
                                <!--</tbody>-->
                            <!--</table>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            </div>

            <!--<div class="text-right mr-lg">-->
                <!--<a class="btn btn-primary" href="#">Checkout</a>-->
            <!--</div>-->
        </div>
</div>
</div>
</div>
                @endsection