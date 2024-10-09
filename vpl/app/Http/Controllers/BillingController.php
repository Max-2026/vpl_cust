<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Number;
use App\Models\UserPaymentMethod;
use App\Services\StripeService;
use Illuminate\Http\Request;
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

    public function add_payment_methods(
        Request $request,
        StripeService $stripe_service
    )
    {
        $request->validate([
            'new_payment_method' => 'required|json',
        ]);
        $user = $request->user();
        $card_data = json_decode($request->new_payment_method);
        $stripe_service->create_customer($user);

        if ($card_data !== null) {
            $card = new UserPaymentMethod;
            $card->id = $card_data->id;
            $card->last_digits = $card_data->last_digits;
            $card->expiry_month = $card_data->expiry_month;
            $card->expiry_year = $card_data->expiry_year;
            $card->card_holder_name = $card_data->card_holder_name;
            $card->brand = $card_data->brand;
            $user->payment_methods()->save($card);

            $stripe_service->add_card(
                $card->id,
                $user->stripe_customer_id
            );

            return response()->json([
                'message' => 'Payment method has been successfully added'
            ]);
        }

        return response()->json([
            'message' => 'Field new_payment_method is null'
        ], 400);
    }

    public function add_balance(Request $request, StripeService $stripe_service)
    {
        $request->validate([
            'payment_method_id' => 'required|exists:user_payment_methods,id',
            'balance_amount' => 'required'
        ]);

        $user = $request->user();
        $card = UserPaymentMethod::find($request->payment_method_id);

        if ($card->user_id != $user->id) abort(403);

        $payment_intent = $stripe_service->charge_card(
            $card->id,
            $user->stripe_customer_id,
            (float) $request->balance_amount
        );

        $invoice = new Invoice;
        $invoice->summary = 'Balance added';
        $invoice->amount = (float) $request->balance_amount;
        $invoice->payment_reference_id = $payment_intent->id;
        $user->invoices()->save($invoice);

        $user->balance += $request->balance_amount;
        $user->save();

        return response()->json([
            'message' => 'The request amount has been successfully added to user account'
        ]);
    }
}
