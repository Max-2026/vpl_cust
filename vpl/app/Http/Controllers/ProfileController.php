<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = auth()->user();

        return view('profile.index', [
            'user' => $user,
        ]);
    }

    public function update_profile(Request $request)
    {
        $user = $request->user();

        $user->name = $request->name ?? $user->name;
        $user->email = $request->email ?? $user->email;
        $user->phone_number = $request->phone ?? $user->phone_number;

        if ($request->avatar) {
            $user->avatar = $request->file('avatar')->store('avatars');
        }
        $user->save();

        $user_details = UserAddress::where('user_id', $user->id)->first();

        $user_details->address = $request->address ?? $user_details->address;
        $user_details->city = $request->city ?? $user_details->city;
        $user_details->country = $request->country ?? $user_details->country;
        $user_details->state = $request->state ?? $user_details->state;
        $user_details->postal_code = $request->postal_code ?? $user_details->postal_code;
        $user_details->save();

        return redirect('/profile');
    }
}
