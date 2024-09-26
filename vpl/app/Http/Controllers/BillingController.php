<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Number;
use Illuminate\Support\Facades\Auth;

class BillingController extends Controller
{
    public function billing()
    {

        $user = Auth::user();
        $numbers = Number::where('current_user_id', $user->id)->get();
        $invoice = Invoice::where('user_id', $user->id)->get();

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

        return view('billings.index', [
            'test_Card' => $test,
            'numbers' => $numbers,
            'user' => $user,
        ]);
    }
}
