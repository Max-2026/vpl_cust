<?php

use App\Http\Controllers\Controller;
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




Route::group(['as' => 'Buy_Number.'], function () {
Route::get('/buynumber', [Controller::class, 'buynumber'])->name('buynumber');
Route::get('/goldennumber', [Controller::class, 'goldennumber'])->name('goldennumber');
});


Route::group(['as' => 'Inbox.'], function () {
Route::get('/Announcement', [Controller::class, 'Announcement'])->name('Announcement');
Route::get('/Report_a_Problem', [Controller::class, 'Report_a_Problem'])->name('Report_a_Problem');
Route::get('/archive', [Controller::class, 'archive'])->name('archive');
Route::get('/makeawish', [Controller::class, 'makeawish'])->name('makeawish');
Route::get('/messageinbox', [Controller::class, 'messageinbox'])->name('messageinbox');
Route::get('/inboxdetails', [Controller::class, 'inboxdetails'])->name('inboxdetails');

});

Route::group(['as' => 'numbers_in_my_account.'], function () {
Route::get('/numbers_in_my_account', [Controller::class, 'numbers_in_my_account'])->name('numbers_in_my_account');
});

Route::group(['as' => 'cart.'], function () {
Route::get('/mycart', [Controller::class, 'mycart'])->name('mycart');
});


Route::group(['as' => 'advance_feature.'], function () {
Route::get('/voicemessages', function () {

return view('customer_panel.advance_feature.voicemessages');    
});
});


Route::get('/sendsms', function () {
return view('customer_panel.advance_feature.sendsms');    
});

Route::get('/smsinbox', function () {
return view('customer_panel.advance_feature.smsinbox');
});





Route::get('/voicemailsetting', function () {
return view('customer_panel.advance_feature.voicemailsetting');
});

Route::get('/callrecording', function () {
return view('customer_panel.advance_feature.callrecording');
});
Route::get('/smsinbox', function () {
return view('customer_panel.advance_feature.smsinbox');
});
Route::get('/sendsms', function () {
return view('customer_panel.advance_feature.sendsms');
});





Route::get('/accountstatment', function () {
return view('customer_panel.billings.accountstatment');
});

Route::get('/addtalktime', function () {
return view('customer_panel.billings.addtalktime');
});

Route::get('/addfunds', function () {
return view('customer_panel.billings.addfunds');
});

Route::get('/creditcardproccess', function () {
return view('customer_panel.billings.creditcardproccess');
});
        

Route::get('/faxes', function () {
return view('customer_panel.my_number.my_fexes');
});
Route::get('/view_all_my_number', function () {
return view('customer_panel.my_number.view_all_my_number');
});


Route::get('/', function () {
return view('customer_panel.dashboard');
});

Route::get('/callfor', function () {
return view('customer_panel.my_number.change_call_forwarding');
});
Route::get('/basicinfo', function () {
return view('customer_panel.profile.basic_info');
});





Route::get('/ivr', function () {
return view('customer_panel.advance_feature.IVR_manager');
});


Route::get('/virtualpbx', function () {
return view('customer_panel.advance_feature.virtualpbx');
});


Route::get('/pbxsetting', function () {
return view('customer_panel.advance_feature.PBXsetting');
});



Route::get('/UploadPBXIVR', function () {
return view('customer_panel.advance_feature.UploadPBXIVR');
});


Route::get('/mastertalk', function () {
    return view('customer_panel.billings.mastertalktime');
    });
    
