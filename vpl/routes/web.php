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
    return view('advance_feature.voicemessages');

});

Route::get('/voicemailsetting', function () {
    return view('advance_feature.voicemailsetting');
});

Route::get('/callrecording', function () {
    return view('advance_feature.callrecording');
});


Route::get('/faxes', function () {
    return view('customer_panel.my_number.my_fexes');
});
Route::get('/view', function () {
    return view('customer_panel.my_number.view_all_my_number');
});




Route::get('/', function () {
    return view('customer_panel.dashboard');
});


Route::get('/ivr', function () {
    return view('customer_panel.dashboard');
});


