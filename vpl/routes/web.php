<?php

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


Route::get('/faxes', function () {
    return view('customer_panel.my_number.my_fexes');
});
Route::get('/view', function () {
    return view('customer_panel.my_number.view_all_my_number');
});




Route::get('/', function () {
    return view('customer_panel.dashboard');
});


