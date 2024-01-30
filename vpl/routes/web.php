<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BuyNumberController;
use App\Http\Controllers\NumbersController;
use App\Http\Controllers\AdvanceFeaturesController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportProblemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Numbersinmyaccount;
use App\Http\Controllers\SendSmsController;
use App\Http\Controllers\SmsInboxController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\ApiController;

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

// Authentication Routes
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post(
    '/login',
    [LoginController::class, 'login_post']
)->name('login_post');

Route::get('/signup', [LoginController::class, 'signup'])->name('signup');
Route::post(
    '/signup',
    [LoginController::class, 'signup_post']
)->name('signup_post');

// Social Media Auth Provider Route
Route::get(
    '/login/redirect/{provider_name}',
    [LoginController::class, 'redirect']
)->name('third_party_login');
Route::get('/login/callback', [LoginController::class, 'callback']);

// Email Verification Route
Route::get(
    '/email/verify',
    [EmailVerificationController::class, 'notice']
)->middleware('auth')->name('verification.notice');
Route::get(
    '/email/verify/{id}/{hash}',
    [EmailVerificationController::class, 'verify']
)->middleware(['auth', 'signed'])->name('verification.verify');

/**
 * Protected Routes
 */
Route::middleware('auth')->group(function () {
    Route::get(
        '/',
        [DashboardController::class, 'dashboard']
    )->name('dashboard');
    
    Route::get(
        '/buy_number',
        [BuyNumberController::class, 'buy_number']
    )->name('buy_number');

    Route::get('/search',[BuyNumberController::class, 'search'])->name('search');

    Route::get('/city/{city}',[BuyNumberController::class, 'search_city_number'])->name('city');


    Route::get(
        '/buy_golden_number',
        [BuyNumberController::class, 'buy_golden_number']
    )->name('buy_golden_number');



    Route::get('/faxes', [NumbersController::class, 'faxes'])->name('faxes');

    Route::get(
        '/view_all_numbers',
        [NumbersController::class, 'view_all_numbers']
    )->name('view_all_numbers');

    Route::get(
        '/call_forwarding',
        [NumbersController::class, 'call_forwarding']
    )->name('call_forwarding');

    Route::get(
        '/my_number/{id}',
        [NumbersController::class, 'my_numbers']
    )->name('my_number');

    Route::get(
        '/call_logs',
        [NumbersController::class, 'call_logs']
    )->name('call_logs');

    Route::get(
        '/package',
        [NumbersController::class, 'package']
    )->name('package');

    Route::get(
        '/plan_details',
        [NumbersController::class, 'plan_details']
    )->name('plan_details');

    Route::get(
        '/voice_messages',
        [AdvanceFeaturesController::class, 'voice_messages']
    )->name('voice_messages');

    Route::get(
        '/voice_mail_setting',
        [AdvanceFeaturesController::class, 'voice_mail_setting']
    )->name('voice_mail_setting');    

    Route::get(
        '/call_recordings',
        [AdvanceFeaturesController::class, 'call_recordings']
    )->name('call_recordings');    

    Route::get(
        '/ivr_setting',
        [AdvanceFeaturesController::class, 'ivr_setting']
    )->name('ivr_setting');    

    Route::get(
        '/virtual_pbx_setting',
        [AdvanceFeaturesController::class, 'virtual_pbx_setting']
    )->name('virtual_pbx_setting');  

    Route::get(
        '/pbx_setting',
        [AdvanceFeaturesController::class, 'pbx_setting']
    )->name('pbx_setting');      

    Route::get(
        '/upload_pbx',
        [AdvanceFeaturesController::class, 'upload_pbx']
    )->name('upload_pbx');    

    Route::get(
        '/account_statement',
        [BillingController::class, 'account_statement']
    )->name('account_statement');

    Route::get(
        '/add_talktime',
        [BillingController::class, 'add_talktime']
    )->name('add_talktime');

    Route::get(
        '/add_funds',
        [BillingController::class, 'add_funds']
    )->name('add_funds');

    Route::get(
        '/credit_card',
        [BillingController::class, 'credit_card']
    )->name('credit_card');

    Route::get(
        '/talktime',
        [BillingController::class, 'talktime']
    )->name('talktime');

    Route::get(
        '/basic_info',
        [ProfileController::class, 'basic_info']
    )->name('basic_info');

    Route::get(
        '/contact_info',
        [ProfileController::class, 'contact_info']
    )->name('contact_info');

    Route::get(
        '/credit_card_details',
        [ProfileController::class, 'credit_card_details']
    )->name('credit_card_details');

    Route::get(
        '/sms_setting',
        [ProfileController::class, 'sms_setting']
    )->name('sms_setting');

    Route::get(
        '/general_setting',
        [ProfileController::class, 'general_setting']
    )->name('general_setting');

    Route::get(
        '/verified_number',
        [ProfileController::class, 'verified_number']
    )->name('verified_number');

    Route::get(
        '/report_problem',
        [ReportProblemController::class, 'report_problem']
    )->name('report_problem');

    Route::get(
        '/send_sms',
        [SendSmsController::class, 'send_sms']
    )->name('send_sms');

    Route::get(
        '/sms_inbox',
        [SmsInboxController::class, 'sms_inbox']
    )->name('sms_inbox');

    Route::post('/cart', [CartController::class, 'cart'])->name('cart');

    Route::get(
        '/call_forwading_setting/{id}',
        [NumbersController::class, 'call_forwading_setting']
    )->name('call_forwading_setting');

    Route::get(
        '/monthly_recurring_charges',
        [NumbersController::class, 'monthly_recurring_charges']
    )->name('monthly_recurring_charges');

    Route::get('/get-did-area-data', [ApiController::class, 'getDIDAreaCodes']);

    Route::get('/get-available-numbers', [ApiController::class, 'getAvailableNumbers']);
});
