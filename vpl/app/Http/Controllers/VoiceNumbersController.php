<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Services\VendorsAPIService;
use Illuminate\Http\Request;

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

        $test = (object) [
            'payment_methods' => [
                (object) [
                    'id' => 'adfwqewredt4',
                    'brand' => 'visa',
                    'last_digits' => '4242',
                    'expiry_month' => '12',
                    'expiry_year' => '2025',
                    'updated_at' => now(),
                ],
            ],
        ];

        return view('voice-numbers.index', [
            'countries' => $countries,
            'numbers' => $numbers,
            'user' => $test,
        ]);
    }

    public function handle_purchase(Request $request)
    {
        dd($request->all());
    }

    public function my_numbers()
    {
        $user = auth()->user();
        $numbers = $user->numbers()->with(['history' => function ($query) use ($user) {
            $query->where('activity', 'purchased')->where('user_id', 7)
                ->latest('created_at');
        }])->get();

        return view('my-numbers.index', [
            'numbers' => $numbers,
            'user' => $user,
        ]);
    }
}
