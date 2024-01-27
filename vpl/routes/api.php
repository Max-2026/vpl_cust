<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;

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

Route::get(
    '/numbers/area/{area_name}',
    [ApiController::class, 'search_numbers_by_area']
);
Route::get(
    '/numbers/country/{country_name}',
    [ApiController::class, 'search_numbers_by_country']
);

Route::get(
    '/areas/{country_name}',
    [ApiController::class, 'search_areas_by_country']
);

Route::post('/get-available-numbers', [ApiController::class, 'getAvailableNumbers']);

Route::get('/get-did-area-data', [ApiController::class, 'getDIDAreaCodes']);



