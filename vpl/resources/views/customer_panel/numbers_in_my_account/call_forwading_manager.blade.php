
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
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
                     <div style="display: flex; margin-left: 40%; align-items: center; flex-wrap: wrap;">
    <div style="text-align: center; margin: 5px;">
        <span>Phone</span><br>
        <i class="fa fa-phone"></i>
    </div>
    <div style="text-align: center; margin: 5px;">
        <span>Fax</span><br>
        <i class="fa fa-fax"></i>
    </div>
    <div style="text-align: center; margin: 5px;">
        <span>Pager</span><br>
        <i class="fa fa-pager"></i>
    </div>
    <div style="text-align: center; margin: 5px;">
        <span>Headphones</span><br>
        <i style="color: #0088cc;" class="fas fa-exchange-alt fa-3x"></i> <!-- This could represent IAX -->
    </div>
    <div style="text-align: center; margin: 5px;">
        <span style="color: red;">Red Phone Alt</span><br>
        <i class="fas fa-phone-alt" style="color: red;"></i>
    </div>
</div>

  

                       <div id="MAINFARWRDING" align="center"> <div id="DIV3" name="DIVRINGTO" style="display: block;">
                    
  <table width="100%">
    <tbody><tr>
      <th colspan="6">Change forwarding to</th>
    </tr>
    <tr>
      <td><input name="radioringto" id="radioPhoneBook" type="radio" onclick="checktheboxPB();" value="-101" checked=""></td>
      <td align="left"><strong><span class="autoTooltip" title="Select from the numbers you defined earlier." target="_blank">Number from phone book</span></strong></td>
      <td colspan="4"><select class="TextBox" name="MapCountryFull" id="MapCountryFull" style="BORDER-LEFT-COLOR: #B8C2DA; BORDER-BOTTOM-COLOR: #B8C2DA; FONT: 10px Verdana,Geneva,sans-serif; 
    COLOR: #336699; BORDER-TOP-COLOR: #B8C2DA; BACKGROUND-COLOR: #FFFFFF; BORDER-RIGHT-COLOR: #B8C2DA; WIDTH:170px" fdprocessedid="yxwhu6f">
        
    <option value="03327951445">03327951445 - 0 </option><option value="3327951445">3327951445 - 0 </option><option value="7">7 -  </option><option value="923055046680">923055046680 - (location) </option>
    
      </select></td>
    </tr>
    <tr bgcolor="#f0f0f0" height="15">
      <td height="10"><input name="radioringto" id="radioPSTN" type="radio" value="3" onclick="checktheboxNew();"></td>
      <td align="left" ><strong>PSTN / Phone / Mobile Number </strong></td>
      <td align="left" ><select name="MapCountry" id="MapCountry" style="BORDER-LEFT-COLOR: #B8C2DA; 
BORDER-BOTTOM-COLOR: #B8C2DA; FONT: 10px Verdana,Geneva,sans-serif; COLOR: #336699; BORDER-TOP-COLOR: #B8C2DA; BACKGROUND-COLOR: #FFFFFF; 
BORDER-RIGHT-COLOR: #B8C2DA; WIDTH:140px" onchange="getNewContent(this.value)" fdprocessedid="a096l8" disabled="disabled">
        
    <option value="1">1 - US / Canada</option>
<option value="1787">1787 - Puerto Rico</option>
<option value="18">18 - Dominican Republic</option>
<option value="20">20 - Egypt</option>
<option value="212">212 - Morocco</option>
<option value="213">213 - Algeria</option>
<option value="216">216 - Tunisia</option>
<option value="218">218 - Libya</option>
<option value="220">220 - Gambia</option>
<option value="221">221 - Senegal</option>
<option value="222">222 - Mauritania</option>
<option value="223">223 - Mali</option>
<option value="224">224 - Guinea Republic</option>
<option value="225">225 - Cte D'Ivoire</option>
<option value="226">226 - Burkina Faso</option>
<option value="227">227 - Niger</option>
<option value="228">228 - Togo</option>
<option value="229">229 - Benin</option>
<option value="230">230 - Mauritius</option>
<option value="231">231 - Liberia</option>
<option value="232">232 - Sierra Leone</option>
<option value="233">233 - Ghana</option>
<option value="234">234 - Nigeria</option>
<option value="235">235 - Chad</option>
<option value="236">236 - Central Africa Republic</option>
<option value="237">237 - Cameroon</option>
<option value="238">238 - Cape Verde Islands</option>
<option value="239">239 - Sao Tome and Principe</option>
<option value="240">240 - Equatorial Guinea</option>
<option value="241">241 - Gabon</option>
<option value="242">242 - Bahamas / Congo</option>
<option value="244">244 - Angola</option>
<option value="245">245 - Guinea-Bissau </option>
<option value="246">246 - Barbados / British Indian Ocean Territory</option>
<option value="247">247 - Ascension Island</option>
<option value="249">249 - Sudan</option>
<option value="250">250 - Rwanda</option>
<option value="252">252 - Somalia</option>
<option value="253">253 - Djibouti</option>
<option value="254">254 - Kenya</option>
<option value="255">255 - Tanzania</option>
<option value="256">256 - Uganda</option>
<option value="257">257 - Burundi</option>
<option value="260">260 - Zambia</option>
<option value="261">261 - Madagascar</option>
<option value="262">262 - Reunion Island</option>
<option value="263">263 - Zimbabwe</option>
<option value="264">264 - Namibia</option>
<option value="265">265 - Malawi</option>
<option value="266">266 - Lesotho</option>
<option value="267">267 - Botswana</option>
<option value="268">268 - Antigua and Barbuda/Swaziland</option>
<option value="269">269 - Comoros Island/Mayotte Islands</option>
<option value="27">27 - South Africa</option>
<option value="290">290 - Saint Helena</option>
<option value="297">297 - Aruba</option>
<option value="298">298 - Faroe Islands</option>
<option value="299">299 - Greenland</option>
<option value="30">30 - Greece</option>
<option value="31">31 - Netherlands</option>
<option value="32">32 - Belgium</option>
<option value="33">33 - France</option>
<option value="34">34 - Spain</option>
<option value="345">345 - Cayman Islands</option>
<option value="350">350 - Gibraltar</option>
<option value="351">351 - Portugal</option>
<option value="352">352 - Luxembourg</option>
<option value="353">353 - Ireland</option>
<option value="354">354 - Iceland</option>
<option value="356">356 - Malta</option>
<option value="357">357 - Cyprus</option>
<option value="358">358 - Finland</option>
<option value="359">359 - Bulgaria</option>
<option value="36">36 - Hungary</option>
<option value="370">370 - Lithuania</option>
<option value="371">371 - latvia</option>
<option value="372">372 - Estonia</option>
<option value="373">373 - Moldova</option>
<option value="374">374 - Armenia</option>
<option value="375">375 - Belarus</option>
<option value="376">376 - Andorra</option>
<option value="377">377 - Monaco</option>
<option value="378">378 - San Marino</option>
<option value="380">380 - Ukraine</option>
<option value="381">381 - Serbia</option>
<option value="385">385 - Croatia</option>
<option value="387">387 - Bosnia</option>
<option value="389">389 - Macedonia (Fyrom)</option>
<option value="39">39 - Italy</option>
<option value="40">40 - Romania</option>
<option value="41">41 - Switzerland</option>
<option value="420">420 - Czech Republic</option>
<option value="421">421 - Slovak Republic</option>
<option value="423">423 - Liechtenstein</option>
<option value="43">43 - Austria</option>
<option value="44">44 - United Kingdom</option>
<option value="441">441 - Bermuda</option>
<option value="45">45 - Denmark</option>
<option value="46">46 - Sweden</option>
<option value="47">47 - Norway</option>
<option value="473">473 - Grenada</option>
<option value="48">48 - Poland</option>
<option value="49">49 - Germany</option>
<option value="500">500 - Falkland Islands</option>
<option value="501">501 - Belize</option>
<option value="502">502 - Guatemala</option>
<option value="503">503 - El Salvador</option>
<option value="504">504 - Honduras</option>
<option value="505">505 - Nicaragua</option>
<option value="506">506 - Costa Rica</option>
<option value="507">507 - Panama</option>
<option value="508">508 - Saint Pierre and Miquelon</option>
<option value="509">509 - Haiti</option>
<option value="51">51 - Peru</option>
<option value="52">52 - Mexico</option>
<option value="53">53 - Cuba</option>
<option value="54">54 - Argentina</option>
<option value="55">55 - Brazil</option>
<option value="56">56 - Chile</option>
<option value="57">57 - Columbia</option>
<option value="58">58 - Venezuela</option>
<option value="590">590 - Guadeloupe</option>
<option value="591">591 - Bolivia</option>
<option value="592">592 - Guyana</option>
<option value="593">593 - Ecuador</option>
<option value="594">594 - French Guiana</option>
<option value="595">595 - Paraguay</option>
<option value="597">597 - Surinam</option>
<option value="598">598 - Uruguay</option>
<option value="599">599 - Netherlands Antilles</option>
<option value="60">60 - Malaysia</option>
<option value="61">61 - Australia</option>
<option value="62">62 - Indonesia</option>
<option value="63">63 - Philippines</option>
<option value="64">64 - New Zealand</option>
<option value="649">649 - Turks &amp; Caicos Islands</option>
<option value="65">65 - Singapore</option>
<option value="66">66 - Thailand</option>
<option value="664">664 - Montserrat</option>
<option value="670">670 - Northern Mariana Islands</option>
<option value="671">671 - Guam</option>
<option value="673">673 - Brunei</option>
<option value="674">674 - Nauru</option>
<option value="675">675 - Papua New Guinea</option>
<option value="676">676 - Tonga</option>
<option value="677">677 - Solomon Islands</option>
<option value="678">678 - Vanuatu</option>
<option value="679">679 - Fiji Islands</option>
<option value="680">680 - Palau</option>
<option value="681">681 - Wallis &amp; Futuna Islands</option>
<option value="682">682 - Cook Islands</option>
<option value="683">683 - Niue</option>
<option value="684">684 - American Samoa </option>
<option value="685">685 - Samoa </option>
<option value="686">686 - Kiribati</option>
<option value="687">687 - New Caledonia</option>
<option value="688">688 - Tuvalu</option>
<option value="689">689 - French Polynesia</option>
<option value="691">691 - Micronesia</option>
<option value="692">692 - Marshall Islands</option>
<option value="7">7 - Russia</option>
<option value="73">73 - Kazakhstan</option>
<option value="767">767 - Dominica Islands</option>
<option value="81">81 - Japan</option>
<option value="82">82 - Korea</option>
<option value="84">84 - Vietnam</option>
<option value="852">852 - Hong Kong</option>
<option value="853">853 - Macau</option>
<option value="855">855 - Cambodia</option>
<option value="856">856 - Laos</option>
<option value="86">86 - China</option>
<option value="868">868 - Trinidad &amp; Tobago</option>
<option value="871">871 - Inmarsat Atlantic Ocean-East </option>
<option value="872">872 - Inmarsat Pacific Ocean</option>
<option value="873">873 - Inmarsat Indian Ocean </option>
<option value="874">874 - Inmarsat Atlantic Ocean-West</option>
<option value="876">876 - Jamaica</option>
<option value="880">880 - Bangladesh</option>
<option value="886">886 - Taiwan</option>
<option value="90">90 - Turkey</option>
<option value="91">91 - India</option>
<option value="92">92 - Pakistan</option>
<option value="93">93 - Afghanistan</option>
<option value="94">94 - Sri Lanka</option>
<option value="95">95 - Myanmar (Burma)</option>
<option value="960">960 - Maldives Republic</option>
<option value="961">961 - Lebanon</option>
<option value="962">962 - Jordan</option>
<option value="963">963 - Syria</option>
<option value="964">964 - Iraq</option>
<option value="965">965 - Kuwait</option>
<option value="966">966 - Saudi Arabia</option>
<option value="968">968 - Oman</option>
<option value="970">970 - Palestine</option>
<option value="971">971 - United Arab Emirates</option>
<option value="972">972 - Israel</option>
<option value="973">973 - Bahrain</option>
<option value="974">974 - Qatar</option>
<option value="975">975 - Bhutan</option>
<option value="977">977 - Nepal</option>
<option value="98">98 - Iran</option>
<option value="992">992 - Tajikistan</option>
<option value="993">993 - Turkmenistan</option>
<option value="994">994 - Azerbaijan</option>
<option value="995">995 - Georgia</option>
<option value="996">996 - Kyrgyzstan</option>
<option value="998">998 - Uzbekistan</option>

    
      </select></td>
      <td><input name="MapArea" type="hidden" class="TextBox" id="MapArea" value="" size="5" maxlength="5" style="BORDER-LEFT-COLOR: #B8C2DA; BORDER-BOTTOM-COLOR: #B8C2DA; FONT: 10px Verdana,Geneva,sans-serif; COLOR: #336699; 
        BORDER-TOP-COLOR: #B8C2DA; BACKGROUND-COLOR: #FFFFFF; BORDER-RIGHT-COLOR: #B8C2DA">        -
      <input name="MapTel" type="text" class="TextBox" id="MapTel" value="" size="15" maxlength="20" style="BORDER-LEFT-COLOR: #B8C2DA; BORDER-BOTTOM-COLOR: #B8C2DA; 
         FONT: 10px Verdana,Geneva,sans-serif; COLOR: #336699; BORDER-TOP-COLOR: #B8C2DA; BACKGROUND-COLOR: #FFFFFF; BORDER-RIGHT-COLOR: #B8C2DA" fdprocessedid="tu4wehg" disabled="disabled"></td>
      <td><input name="Location" type="text" class="TextBox" id="Location" value="(location)" onfocus="if(this.value=='(location)')this.value=''" onblur="if(this.value=='')this.value='(location)'" size="10" maxlength="20" style="BORDER-LEFT-COLOR: #B8C2DA; BORDER-BOTTOM-COLOR: #B8C2DA; FONT: 
        10px Verdana,Geneva,sans-serif; COLOR: #336699; BORDER-TOP-COLOR: #B8C2DA; BACKGROUND-COLOR: #FFFFFF; 
        BORDER-RIGHT-COLOR: #B8C2DA" fdprocessedid="cquei" disabled="disabled"></td>
      <td><a href="javascript:void(0);" class="autoTooltip" title="You can write a name for example, My Cell Phone or Freddy cell number , just to remember this location name." target="_blank">Tip </a></td>
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







</script>
    @endsection
  
</body>

</html>
