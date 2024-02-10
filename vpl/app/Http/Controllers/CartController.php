<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


use App\Models\Cart;
use App\Models\NumberHistory;
use App\Models\Number;
use App\Models\User;
use App\Models\Country;
use App\Models\Area;


class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data = Cart::where('user_id', $user->id)->get();
        return view('customer_panel.my_cart.my_cart',
         ['data' => $data,
            'user' => $user
        ]);
    }

    public function checkout(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user(); 
    
        // Check the user's available balance
        $availableFunds = $user->balance; 
    
        // Get the total amount from the request
        $grandTotal = $request->input('total');
    
        // Check if the user has sufficient funds
        if ($availableFunds >= $grandTotal) {
    
            // Decode the JSON string of phone numbers
            $phoneNumbers = json_decode($request->phone_numbers, true);
    
            // Check if phone numbers are valid and an array
            if ($phoneNumbers && is_array($phoneNumbers)) {
    
                // Iterate through each phone number
                foreach ($phoneNumbers as $phoneNumber) {
                    // dd($phoneNumber);
                    
                    // Find the area match for the phone number
                    $areaName = $phoneNumber['area'];
                    // dd($areaName);
                    $areaMatch = Area::where('name', $areaName)->first();
                    //  dd($areaMatch);
    
                    // If area match found
                    if ($areaMatch) {
                        // Create a new Number instance and save it
                        $number = new Number();
                        $number->area_id = $areaMatch->id;
                        $number->user_id = $user->id;
                        $number->number = $phoneNumber['number'];
                        $number->setup_charges = $phoneNumber['setup_cost'];
                        $number->monthly_charges = $phoneNumber['monthly_charges'];
                        $number->per_mintue_charges = 0;
                        $number->per_sms_charges = 0;
                        $number->forwarding_url = '';
                        $number->save();
    
                        // Call external API to buy the DID number
                        $userId = env('DIDX_USER_ID');
                        $password = env('DIDX_PASSWORD');

                        $response1 = Http::get("https://newapi.didx.net/DidxApis/api/UnreserveDIDByNumber.php", [
                            'UserID' => $userId,
                            'Password' => $password,
                            'DIDNumber' => $phoneNumber['number'],
                        ]);

                        // $response = Http::get("http://newapi.didx.net/DidxApis/api/BuyDIDByNumber.php", [
                        //     'UserID' => $userId,
                        //     'Password' => $password,
                        //     'DIDNumber' => $phoneNumber['number'], 
                        // ]);
    
                        // Saving number history
                        $numberHistory = new NumberHistory();
                        $numberHistory->number_id = $number->id;
                        $numberHistory->user_id = $user->id;
                        $numberHistory->is_purchased = 0;
                        $numberHistory->is_released = 0;
                        $numberHistory->is_reserved = 0;
                        $numberHistory->setup_charges = $phoneNumber['setup_cost'];
                        $numberHistory->monthly_charges = $phoneNumber['monthly_charges'];
                        $numberHistory->per_mintue_charges = 0;
                        $numberHistory->per_sms_charges = 0;
                        $numberHistory->minutes_consumed = 0;
                        $numberHistory->prorated_billing = 0;
                        $numberHistory->save();
                    }
                }
    
                // Deduct the total amount from the user's balance
                $user->balance -= $grandTotal;
                $user->save();
    
                // Clear the user's cart after checkout
                Cart::where('user_id', $user->id)->delete();
    
                // Redirect the user to the cart page with a success message
                return redirect()->route('view_all_numbers')->with('success', 'Checkout successful.');
            } else {
                // Redirect back to the cart with an error message if no phone numbers found
                return redirect()->route('my_cart')->with('error', 'No phone numbers found.');
            }
        } else {
            // Redirect back to add funds page with an error message if balance is insufficient
            return redirect()->route('add_funds')->with('error', 'Insufficient funds for checkout.');
        }
    }
    
}
