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


Route::get('/voicemessages', function () {
    return view('customer_panel.advance_feature.voicemessages');

});

Route::get('/voicemailsetting', function () {
    return view('customer_panel.advance_feature.voicemailsetting');
});

Route::get('/callrecording', function () {
    return view('customer_panel.advance_feature.callrecording');
});


Route::get('/faxes', function () {
    return view('customer_panel.my_number.my_fexes');
});
Route::get('/view', function () {
    return view('customer_panel.my_number.view_all_my_number');
});

<<<<<<< Updated upstream
Route::get('/', function () {
    return view('customer_panel.dashboard');
});
=======
Route::get('/call_for', function () {
    return view('customer_panel.my_number.change_call_forwarding');
});
Route::get('/basic_info', function () {
    return view('customer_panel.profile.basic_info');
});


>>>>>>> Stashed changes


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
