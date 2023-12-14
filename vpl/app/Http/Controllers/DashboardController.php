<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        return view('customer_panel.dashboard', [
            'user' => $user
        ]);
    }
}
