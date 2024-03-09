<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoiceNumbersController;

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

    Route::get('/voice-numbers', [VoiceNumbersController::class, 'index'])
        ->name('voice_numbers');

    // Route::post('/logout', [LoginController::class, 'logout'])
    //     ->name('logout');

// });

// Public Routes
// Route::get('/login', [LoginController::class, 'login'])
//     ->name('login');

// Route::post('/login', [LoginController::class, 'login_post'])
//     ->name('login-post');

// Route::get(
//     '/login/redirect/{provider_name}',
//     [LoginController::class, 'redirect']
// )->name('third-party-login');

// Route::get('/login/callback', [LoginController::class, 'callback']);
