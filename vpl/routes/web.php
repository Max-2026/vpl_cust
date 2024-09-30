<?php

use App\Http\Controllers\BillingController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\VoiceNumbersController;
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

// Protected Routes
Route::middleware('auth')->group(function () {

    // Numbers listing & purchase page
    Route::get(
        '/purchase-numbers',
        [VoiceNumbersController::class, 'index']
    )->name('purchase-numbers');

    Route::get(
        '/my-numbers',
        [VoiceNumbersController::class, 'my_numbers']
    )->name('my-numbers');

    Route::get(
        '/logs/{number_id}',
        [VoiceNumbersController::class, 'logs']
    )->name('number-logs');

    Route::get(
        '/release/{number_id}',
        [VoiceNumbersController::class, 'release']
    )->name('release-number');

    Route::get(
        '/billing',
        [BillingController::class, 'billing']
    )->name('billing');

    Route::get(
        '/sms-services',
        [SmsController::class, 'index']
    )->name('sms-services');

    Route::get(
        '/send-sms',
        [SmsController::class, 'view_send_sms']
    )->name('send-sms');

    // Confirm purchase form
    Route::post(
        '/voice-numbers',
        [VoiceNumbersController::class, 'handle_purchase']
    )->name('handle-purchase');

    // Settings page
    Route::get('/settings', function () {
    })->name('settings');

    // Help page
    Route::get('/help', function () {
    })->name('help');

    Route::get('/logout', [LoginController::class, 'logout'])
        ->name('logout');

    Route::post('/send-message', [SmsController::class, 'send_message'])
        ->name('send-message');

    Route::post('/search-message', [SmsController::class, 'searchMessage']);

    Route::get('/search-message', [SmsController::class, 'index']);

});

// Public Routes
Route::get('/', [HomepageController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'login'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login_post'])
    ->name('handle-login');

Route::get('/register', [LoginController::class, 'signup'])
    ->name('register');

Route::post('/register', [LoginController::class, 'signup_post'])
    ->name('handle-register');

Route::get(
    '/login/redirect/{provider_name}',
    [LoginController::class, 'redirect']
)->name('third-party-login');

Route::get('/login/callback', [LoginController::class, 'callback']);
