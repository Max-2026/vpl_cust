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

Route::get('/voicemessages', function () {
    return view('advance_feature.voicemessages');
});

Route::get('/voicemailsetting', function () {
    return view('advance_feature.voicemailsetting');
});

Route::get('/callrecording', function () {
    return view('advance_feature.callrecording');
});