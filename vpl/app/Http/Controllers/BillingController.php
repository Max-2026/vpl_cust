<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Number;
use App\Models\UserPaymentMethod;
use App\Services\StripeService;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function billing(Request $request)
    {
        $user = $request->user();
        $numbers = Number::where('current_user_id', $user->id)->get();

        $invoices = Invoice::when(
            $request->bill_number,
            function ($query) use ($request) {
                $query->withWhereHas('number', function ($q) use ($request) {
                    $q->where('number', $request->bill_number);
                });
            }
        )
            ->when(
                $request->bill_date,
                function ($query) use ($request) {
                    $query->whereDate('created_at', $request->bill_date);
                }
            )
            ->where('user_id', $user->id)
            ->paginate();

        return view('billings.index', [
            'numbers' => $numbers,
            'user' => $user,
            'invoices' => $invoices,
        ]);
    }

    public function add_payment_methods(
        Request $request,
        StripeService $stripe_service
    ) {
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
                'message' => 'Payment method has been successfully added',
            ]);
        }

        return response()->json([
            'message' => 'Field new_payment_method is null',
        ], 400);
    }

    public function add_balance(Request $request, StripeService $stripe_service)
    {
        $request->validate([
            'payment_method_id' => 'required|exists:user_payment_methods,id',
            'balance_amount' => 'required',
        ]);

        $user = $request->user();
        $card = UserPaymentMethod::find($request->payment_method_id);

        if ($card->user_id != $user->id) {
            abort(403);
        }

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
            'message' => 'The request amount has been successfully added to user account',
        ]);
    }
}
