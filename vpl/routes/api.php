<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->group(function () {
// });

Route::post('/contact-us', function (Request $request) {

    if ($request?->secret !== config('app.contact_us_secret')) {
        return response()->json(['message' => 'Invalid secret'], 401);
    }

    $content = "{$request->first_name} {$request->last_name}\nFrom: {$request->email}\nPhone: {$request->phone_number}\nMessage: {$request->message}";

    Mail::raw($content, function ($message) {
        $message->to(['erdumadnan@gmail.com', 'support@dialifi.com'])
            ->subject('New Message | Dialifi.com');
    });

    return response()->json(['message' => 'Success']);
});
