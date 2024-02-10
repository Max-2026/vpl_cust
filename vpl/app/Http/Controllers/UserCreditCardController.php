<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; 

use Illuminate\Http\Request;
use App\Models\UserCreditCard; 

use App\Models\User;

class UserCreditCardController extends Controller
{
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        $validatedData = $request->validate([
            'card_number' => 'required|string|unique:user_credit_cards',
            'name_on_card' => 'required|string|max:30',
            'card_type' => 'required|string|max:30', // Add this line
            'card_expiry' => 'required|string|max:30',
            'cvv' => 'required|string|max:10',
        ]);

        $userCreditCard = new UserCreditCard();
        $userCreditCard->user_id = $user_id;
        $userCreditCard->card_number = $request->input('card_number');
        $userCreditCard->name_on_card = $request->input('name_on_card');
        $userCreditCard->card_type = $request->input('card_type');
        $userCreditCard->card_expiry = $request->input('card_expiry');
        $userCreditCard->cvv = $request->input('cvv');

        $userCreditCard->save();

        return redirect()->back()->with('success', 'Credit card information saved successfully!');
    }

    public function primary_set(Request $request){

        $selectedCardId = $request->input('selected_card');
        $currentUser = Auth::user();

        $currentUser->userCreditCards()->where('user_id', $currentUser->id)->update([
            'is_primary' => 0 ]);
        $currentUser->userCreditCards()->where('id', $selectedCardId)->update([
            'is_primary' => 1 ]);

            return redirect('/credit_card_details');
    }
    
}