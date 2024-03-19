<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VendorsAPIService;
use App\Models\Country;

class VoiceNumbersController extends Controller
{
    public function index(Request $request, VendorsAPIService $vendors)
    {
        $countries = Country::all();
        $numbers = $vendors->vendor('DIDX')->get_numbers('1');

        return view('voice-numbers.index', [
            'countries' => $countries,
            'numbers' => $numbers
        ]);
    }
}
