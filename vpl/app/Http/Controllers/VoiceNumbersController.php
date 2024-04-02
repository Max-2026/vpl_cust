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

        if ($request->billing_type) {
        }

        if ($request->capability) {
        }

        if ($request->no_legal) {
        }

        if ($request->toll_free) {
        }

        $numbers = $vendors->vendor('DIDX')->get_numbers(
            $request->country,
            $request->prefix
        );
        // $numbers = $vendors->vendor('DIDX')->get_numbers('7');

        return view('voice-numbers.index', [
            'countries' => $countries,
            'numbers' => $numbers
        ]);
    }
}
