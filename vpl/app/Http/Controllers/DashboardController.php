<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        return view('customer_panel.dashboard', [
            'user' => $user,
        ]);
    }
}
