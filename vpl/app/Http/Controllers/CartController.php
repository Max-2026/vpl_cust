<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

use App\Models\Cart;
use App\Models\User;

class CartController extends Controller
{

    public function index()
    {
        $user = Auth::user()->id;
        $data = Cart::where('user_id', $user)->get();
        return view('customer_panel.my_cart/my_cart', 
        ['data' => $data]);
    }

}

