


@extends('layout')

@section('content')
<style>

.icon-link {
display: inline-block;
margin: 0 5px; /* Adjust the margin as needed */
width: 24px; /* Set the desired width */
height: 24px; /* Set the desired height */
}

.icon-link img {
width: 100%;
height: 100%;
}


.panel {
margin-bottom: 30px;
padding: 20px;
}

.form-horizontal .form-group {
display: flex;
align-items: center;
margin-bottom: 15px;
}

@media (max-width: 768px) {
.form-horizontal .form-group {
flex-direction: column;
align-items: stretch;
}
}

.panel {
box-shadow: none;
border: none;
}

button {
background-color: #007bff;
color: white;
border: none;
padding: 10px 20px;
border-radius: 5px;
cursor: pointer;
}
button:hover {
background-color: #0056b3;
}



</style>
<section class="panel">
<div class="panel-body">

<form class="form-horizontal form-bordered card rounded">

<div class="form-group pt-3">
<div class="col-lg-6 col-md-6"><label>Your Order ID / Number</label></div>
<div class="col-lg-6 col-md-6">
<p class="form-control-static"><label>1005729 </label></p>
</div>
</div>
<div class="form-group pt-3">
<div class="col-lg-6 col-md-6"><label>Changing Setting for  Number</label></div>
<div class="col-lg-6 col-md-6">
<p class="form-control-static"><label>12025521553</label> </p>
</div>
</div>
<div class="form-group pt-3">
<div class="col-lg-6 col-md-6"><label>Current Ring To Number / Address</label></div>
<div class="col-lg-6 col-md-6">
<p class="form-control-static"><label><img src="http://www.virtualphoneline.com/admins/image.php?id=280">&nbsp;PSTN: 03327951445 </label></p>
</div>
</div>
<div class="form-group pt-3">
<div class="col-lg-6 col-md-6"><label>Your Talk Time Balance</label></div>
<div class="col-lg-6 col-md-6">
<p class="form-control-static"><label>$0.0 </label></p>
</div>
</div>
<div class="form-group pt-3">
<div class="col-lg-6 col-md-6"><label>Number Status</label></div>
<div class="col-lg-6 col-md-6">
<p class="form-control-static"><label>Active / Permanent Number</label></p>
</div>
</div>
<div class="form-group pt-3">
<div class="col-lg-6 col-md-6"><label>Billing Plan</label></div>
<div class="col-lg-6 col-md-6">
<p class="form-control-static"><label>Pay As You Go</label></p>
</div>
</div>
<div class="form-group pt-3">
<div class="col-lg-6 col-md-6"><label>Next Billing Date</label></div>
<div class="col-lg-6 col-md-6">
<p class="form-control-static"><label>08-December-2023</label></p>
</div>
</div>
<div class="form-group pt-3">
<div class="col-lg-12 col-md-12" style="text-align:center; ">
<div id="a" class="dg-post">
<div id="a" class="bdy">
<div>
<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><p><img id="showForm1" src="http://virtualphoneline.com/admins/image.php?id=280"></p></a>                    
</li>
<li class="nav-item">
<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><p><img id="showForm2" src="http://virtualphoneline.com/admins/image.php?id=281"></p></a>
</li>
<li class="nav-item">
<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><p><img id="showForm3" src="http://virtualphoneline.com/admins/image.php?id=277"></p></a>
</li>

<li class="nav-item">
<a class="nav-link" id="ivr-tab" data-toggle="tab" href="#ivr" role="tab" aria-controls="ivr" aria-selected="false"><p><img id="showForm4" src="http://virtualphoneline.com/admins/image.php?id=287"></p></a>
</li>

<li class="nav-item">
<a class="nav-link" id="pbx-tab" data-toggle="tab" href="#pbx" role="tab" aria-controls="ivr" aria-selected="false"><P><img id="showForm6" src="http://virtualphoneline.com/admins/image.php?id=279"></P></a>
</li>
<li class="nav-item">
<a class="nav-link" id="voice-tab" data-toggle="tab" href="#voice" role="tab" aria-controls="ivr" aria-selected="false"><P><img id="showForm7" src="http://virtualphoneline.com/admins/image.php?id=266"></P></a>
</li>
</ul>
<div class="tab-content" id="myTabContent">
<!-- phone start -->
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">




<table width="100%">
<tbody><tr>
<th colspan="6">Change forwarding to</th>
</tr>
<tr>
<td><input name="radioringto" id="radioPhoneBook" type="radio"  value="-101" checked=""></td>
<td align="left"><strong><span class="autoTooltip" title="Select from the numbers you defined earlier." target="_blank">Number from phone book</span></strong></td>
<td colspan="4"><select class="custom-select"  name="MapCountryFull" id="MapCountryFull" style="BORDER-LEFT-COLOR: #B8C2DA; BORDER-BOTTOM-COLOR: #B8C2DA; FONT: 10px Verdana,Geneva,sans-serif; 
COLOR: #336699; BORDER-TOP-COLOR: #B8C2DA; BACKGROUND-COLOR: #FFFFFF; BORDER-RIGHT-COLOR: #B8C2DA; WIDTH:170px" fdprocessedid="yxwhu6f">

<option value="03327951445">03327951445 - 0 </option><option value="3327951445">3327951445 - 0 </option><option value="7">7 -  </option><option value="923055046680">923055046680 - (location) </option>

</select></td>
</tr>
<tr bgcolor="#f0f0f0" height="15">
<td height="10"><input name="radioringto" id="radioPSTN" type="radio" value="3" ></td>
<td align="left" ><strong>PSTN / Phone / Mobile Number </strong></td>
<td align="left" ><select class="custom-select" name="MapCountry" id="MapCountry" style="BORDER-LEFT-COLOR: #B8C2DA; 
BORDER-BOTTOM-COLOR: #B8C2DA; FONT: 10px Verdana,Geneva,sans-serif; COLOR: #336699; BORDER-TOP-COLOR: #B8C2DA; BACKGROUND-COLOR: #FFFFFF; 
BORDER-RIGHT-COLOR: #B8C2DA; WIDTH:140px"  fdprocessedid="a096l8" disabled="disabled">

<option value="1">1 - US / Canada</option>
<option value="1787">1787 - Puerto Rico</option>
<option value="18">18 - Dominican Republic</option>
<option value="20">20 - Egypt</option>
<option value="212">212 - Morocco</option>
<option value="213">213 - Algeria</option>
<option value="216">216 - Tunisia</option>

</select></td>
<td> <input name="MapArea" type="hidden" id="MapArea" value="" style="BORDER-LEFT-COLOR: #B8C2DA; BORDER-BOTTOM-COLOR: #B8C2DA; FONT: 10px Verdana,Geneva,sans-serif; COLOR: #336699; BORDER-TOP-COLOR: #B8C2DA; BACKGROUND-COLOR: #FFFFFF; BORDER-RIGHT-COLOR: #B8C2DA">
-
<input name="MapTel" type="text" id="MapTel" value="" size="15" maxlength="20" style="BORDER-LEFT-COLOR: #B8C2DA; BORDER-BOTTOM-COLOR: #B8C2DA; FONT: 10px Verdana,Geneva,sans-serif; COLOR: #336699; BORDER-TOP-COLOR: #B8C2DA; BACKGROUND-COLOR: #FFFFFF; BORDER-RIGHT-COLOR: #B8C2DA"></td>
<td>
<input name="Location" type="text" class="TextBox" id="Location" value="(location)" onfocus="if(this.value=='(location)')this.value=''" onblur="if(this.value=='')this.value='(location)'" size="10" maxlength="20" style="BORDER-LEFT-COLOR: #B8C2DA; BORDER-BOTTOM-COLOR: #B8C2DA; FONT: 10px Verdana,Geneva,sans-serif; COLOR: #336699; BORDER-TOP-COLOR: #B8C2DA; BACKGROUND-COLOR: #FFFFFF; BORDER-RIGHT-COLOR: #B8C2DA" fdprocessedid="cquei" disabled="disabled">
</td>
<td>
<!-- Removed the link -->
</td>
<td><a  class="autoTooltip" title="You can write a name for example, My Cell Phone or Freddy cell number , just to remember this location name." >Tip </a></td>
</tr>
<tr>
<td colspan="6"><div align="right" id="a">
<input type="button" value="Submit" onclick="" fdprocessedid="hwffm">
</div></td>
</tr>
<tr>
<td colspan="2"></td> <td colspan="2"><div id="contents"></div></td> <td colspan="2"></td>
</tr>
</tbody></table>
</div>



<!-- phone end -->
<!-- sip start -->
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<table width="100%">
<tbody><tr><th colspan="9">Change forwarding to</th></tr>
<tr height="15" bgcolor="#ffffff"><td valign="middle" align="left" width="5%"><input name="radioringto" id="radioringto1" type="hidden" checked="" value="1">
</td><td width="10%">
<strong> 

</strong></td><td width="30%" style="vertical-align:middle">SIP</td><td style="vertical-align:middle" valign="middle" align="left" colspan="6"><input name="RingToBox1" id="RingToBox1" type="text" size="40" fdprocessedid="6d7uu">
<input type="button" value="Submit"fdprocessedid="7tjz5h"></td>
</tr></tbody></table>
</div>
<!-- sip end -->
<!-- ivr start -->
<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

<tbody><tr><th colspan="9">Change forwarding to</th></tr>
<br>
<tr height="15" bgcolor="#ffffff"><td valign="middle" align="left" width="5%"><input name="radioringto" id="radioringto2" type="hidden" checked="" value="2">
</td><td width="10%">
<strong > 

<br>
</strong></td><td  width="30%" style="vertical-align:middle">IAX</td><td style="vertical-align:middle" valign="middle" align="left" colspan="6"><input name="RingToBox2" id="RingToBox2" type="text" size="40" fdprocessedid="liq1cg">
<input type="button"  value="Submit" fdprocessedid="i64wp7"></td>
</tr></tbody>
</div>
<!-- ivr start -->
<div class="tab-pane fade" id="ivr" role="tabpanel" aria-labelledby="contact-tab">

<div id="DIV14" name="DIVRINGTO" style="display: block;"><table width="100%">
<tbody><tr><th colspan="9">Change forwarding to</th></tr>
<tr><td valign="middle" align="left" width="5%"><input name="radioringto" id="radioringto14" type="hidden" checked="" value="14">
</td><td width="10%">
<strong> 

</strong></td><td width="30%" style="vertical-align:middle">IVR</td><td style="vertical-align:middle" valign="middle" align="left" colspan="6"><input name="RingToBox14" id="RingToBox14" type="hidden" size="40" value="FAX">
<input type="button" value="Submit" fdprocessedid="vn9b7o"></td>
</tr></tbody></table></div>
</div>
<!-- ivr end -->
<!-- pbx start -->
<div class="tab-pane fade" id="pbx" role="tabpanel" aria-labelledby="contact-tab">
<div id="DIV42231" name="DIVRINGTO" style="display: block;"><table width="100%">
                    <tbody><tr><th colspan="9">Change forwarding to</th></tr>
                          <tr><td valign="middle" align="left" width="5%">
                          <input name="radioringto" id="radioringto42231" type="hidden" checked="" value="42231">
                          
                         </td><td width="10%">
                         <strong> 
                         </strong></td><td width="30%" style="vertical-align:middle">Virtual PBX</td><td style="vertical-align:middle" valign="middle" align="left" colspan="6"><input name="RingToBox14" id="RingToBox14" type="hidden" size="40" value="FAX">
<input type="button" value="Submit" fdprocessedid="vn9b7o"></td>

                          </tr></tbody></table></div>
</div>
<!-- pbx end -->
<!-- voicemail -->
<div class="tab-pane fade" id="voice" role="tabpanel" aria-labelledby="contact-tab">
<table width="100%">
                    <tbody><tr><th colspan="9">Change forwarding to</th></tr>
                          <tr height="15" bgcolor="#ffffff"><td valign="middle" align="left" width="5%"><input name="radioringto" id="radioringto42235" type="hidden" checked="" value="42235">
                          </td><td width="10%">
                          <strong> 
                           <span class="autoTooltip" title="Voice MailBox Management" target="_blank"><img src="http://www.virtualphoneline.com/admins/image.php?id=266">&nbsp; </span>
                            </strong></td><td width="30%" style="vertical-align:middle">Voicemail Management</td><td style="vertical-align:middle" valign="middle" align="left" colspan="6"><input name="RingToBox42235" id="RingToBox42235" type="hidden" size="40" value="Voice Mailbox Management">
                           <input type="button" value="Submit" onclick="ChangeRingTo_Now(42235);" fdprocessedid="uxo2au"></td>
                          </tr></tbody></table>
</div>
<!-- voicemail -->
</div>






<div id="MAINFARWRDINGRESULT" align="center"> </div>


</div>
</div>
</div>  
</div></form>
<!-- <div class="form-group">
<div class="col-lg-12 col-md-12">
<p class="form-control-static"><label><strong>Change Forwarding to</strong></label></p>
</div>  
</div>
<div class="form-group">
<div class="col-lg-4 col-md-8" style="text-align:right; "><label><img src="http://www.virtualphoneline.com/admins/image.php?id=283"> Skype</label></div>
<div class="col-lg-4 col-md-8">
<div class="input-group mb-md">
<input type="text" placeholder="" class="form-control" name="prefix" id="prefix" value="" onkeypress="return handleKeyPress(event,this.form)" onkeyup="ajax_showOptions(this,'getNumbersByLetters',event)">
<span class="input-group-btn">
<button type="button" name="btnSubmit" class="btn btn-primary" onclick="GetRequiredData(3,form2.prefix.value);" id="btnSubmit">Submit</button>
</span>
</div>
</div>
</div> -->




</div>

</section>
<script>
function checktheboxPB() {
// When 'Number from phone book' is selected
var selectPhoneBook = document.getElementById('MapCountryFull');
var selectPSTN = document.getElementById('MapCountry');

// Enable the 'MapCountryFull' dropdown and disable the 'MapCountry' dropdown
selectPhoneBook.disabled = false;
selectPSTN.disabled = true;
}

function checktheboxNew() {
// When 'PSTN / Phone / Mobile Number' is selected
var selectPhoneBook = document.getElementById('MapCountryFull');
var selectPSTN = document.getElementById('MapCountry');

// Enable the 'MapCountry' dropdown and disable the 'MapCountryFull' dropdown
selectPhoneBook.disabled = true;
selectPSTN.disabled = false;
}

// Add event listeners to the radio buttons for the 'change' event
document.getElementById('radioPhoneBook').addEventListener('change', checktheboxPB);
document.getElementById('radioPSTN').addEventListener('change', checktheboxNew);

// Initialize
checktheboxPB(); // Run at startup to set the initial state




// function toggleDisplay() {
//     var element = document.getElementById("MAINFARWRDING");
//     if (element.style.display === "none") {
//         element.style.display = "block";
//     } else {
//         element.style.display = "none";
//     }
// }



</script>
@endsection

