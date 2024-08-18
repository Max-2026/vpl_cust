<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VoiceNumbersController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\HomepageController;

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
// Route::middleware('auth')->group(function () {

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
        '/billing',
        [BillingController::class, 'billing']
    )->name('billing');

    // Confirm purchase form
    Route::post(
        '/voice-numbers',
        [VoiceNumbersController::class, 'handle_purchase']
    )->name('handle-purchase');

    // Settings page
    Route::get('/settings', function () {})->name('settings');

    // Help page
    Route::get('/help', function () {})->name('help');

    // Route::post('/logout', [LoginController::class, 'logout'])
    //     ->name('logout');

// });

// Public Routes
Route::get('/', [HomepageController::class, 'index'])->name('home');
// Route::get('/login', [LoginController::class, 'login'])
//     ->name('login');

// Route::post('/login', [LoginController::class, 'login_post'])
//     ->name('login-post');

// Route::get(
//     '/login/redirect/{provider_name}',
//     [LoginController::class, 'redirect']
// )->name('third-party-login');

// Route::get('/login/callback', [LoginController::class, 'callback']);
