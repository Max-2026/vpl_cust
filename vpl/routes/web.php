<?php

use App\Http\Controllers\Buynumber;
use App\Http\Controllers\Mynumbers;
use App\Http\Controllers\Advancefeatures;
use App\Http\Controllers\Billings;
use App\Http\Controllers\Profile;
use App\Http\Controllers\Reportproblem;
use App\Http\Controllers\Mycart;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Numbersinmyaccount;
use App\Http\Controllers\Sendsms;
use App\Http\Controllers\Smsinbox;



use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['as' => 'dashboard.'], function () {
    Route::get('/', [Dashboard::class, 'dashboard'])->name('dashboard');
});

Route::group(['as' => 'Buy_Number.'], function () {
    Route::get('/buynumber', [Buynumber::class, 'buynumber'])->name('buynumber');
    Route::get('/goldennumber', [Buynumber::class, 'goldennumber'])->name('goldennumber');
  });    


Route::group(['as' => 'my_number.'], function () {
    Route::get('/faxes', [Mynumbers::class, 'Myfaxes'])->name('Myfaxes');    
    Route::get('/viewallnumber', [Mynumbers::class, 'viewallmynumber'])->name('viewallmynumber');
    Route::get('/callforwarding', [Mynumbers::class, 'changeforwarding'])->name('changeforwarding');
    Route::get('/numbermyaccount', [Mynumbers::class, 'number_in_my_account'])->name('number_in_my_account');
    Route::get('/calllog', [Mynumbers::class, 'call_log'])->name('call_log');
    Route::get('/packageplan', [Mynumbers::class, 'pakage_plan'])->name('packageplan');
    Route::get('/palndetail', [Mynumbers::class, 'palndetail'])->name('palndetail');

    
 });


Route::group(['as' => 'advance_feature.'], function () {
    Route::get('/voicemessages', [Advancefeatures::class, 'voicemessages'])->name('voicemessages');
    Route::get('/sendsms', [Advancefeatures::class, 'sendsms'])->name('sendsms');    
    Route::get('/smsinbox', [Advancefeatures::class, 'smsinbox'])->name('smsinbox');    
    Route::get('/voicemailsetting', [Advancefeatures::class, 'voicemail'])->name('voicemail');    
    Route::get('/callrecording', [Advancefeatures::class, 'callrecording'])->name('callrecording');    
    Route::get('/ivr', [Advancefeatures::class, 'ivrmanager'])->name('ivrmanager');    
    Route::get('/virtualpbx', [Advancefeatures::class, 'virtualpbx'])->name('virtualpbx');  
    Route::get('/pbxsetting', [Advancefeatures::class, 'pbxsetting'])->name('pbxsetting');      
    Route::get('/uploadpbx', [Advancefeatures::class, 'uploadpbx'])->name('uploadpbx');    
});
    

Route::group(['as' => 'Billings.'], function () {
    Route::get('/accountstatment', [Billings::class, 'accountstatment'])->name('accountstatment');
    Route::get('/addtalktime', [Billings::class, 'addtalktime'])->name('addtalktime');
    Route::get('/addfunds', [Billings::class, 'addfunds'])->name('addfunds');
    Route::get('/creditcardproccess', [Billings::class, 'changecreditcard'])->name('changecreditcard');
    Route::get('/mastertalk', [Billings::class, 'mastertalktime'])->name('mastertalktime');
});


Route::group(['as' => 'Profile.'], function () {
    Route::get('/basicinfo', [Profile::class, 'basicinfo'])->name('basicinfo');
    Route::get('/contactinfo', [Profile::class, 'contactinfo'])->name('contactinfo');
    Route::get('/creditinfo', [Profile::class, 'creditcardinfo'])->name('creditcardinfo');
    Route::get('/smssetting', [Profile::class, 'smssetting'])->name('smssetting');
    Route::get('/generalsetting', [Profile::class, 'generalsetting'])->name('generalsetting');
    Route::get('/verifiednumber', [Profile::class, 'verified_number'])->name('verified_number');
});



Route::group(['as' => 'reportproblem.'], function () {
    Route::get('/reportproblem', [Reportproblem::class, 'reportproblem'])->name('reportproblem');
    });
    

Route::group(['as' => 'sendsms.'], function () {
Route::get('/sendsms', [Sendsms::class, 'sendsms'])->name('sendsms');
}); 


Route::group(['as' => 'smsinbox.'], function () {
    Route::get('/inbox', [Smsinbox::class, 'smsinbox'])->name('smsinbox');
    });   



Route::group(['as' => 'cart.'], function () {
Route::get('/mycart', [Mycart::class, 'mycart'])->name('mycart');
});





Route::group(['as' => 'numbersinmyaccount.'], function () {
    Route::get('/numbersinmyaccount', [Numbersinmyaccount::class, 'numberacnt'])->name('numbersinmyaccount');
    Route::get('/callforwadingmanager', [Numbersinmyaccount::class, 'call_forwading_manager'])->name('callforwadingmanager');
    Route::get('/monthlyrecurringcharges', [Numbersinmyaccount::class, 'monthly_recurring_charges'])->name('monthlyrecurringcharges');
    
});
    


























    

   
