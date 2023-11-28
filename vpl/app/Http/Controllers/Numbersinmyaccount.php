<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Numbersinmyaccount extends Controller
{
    public function numberacnt()
    {
        return view ('customer_panel.numbers_in_my_account.numbers_in_my_account');
    }

    public function call_forwading_manager()
    {
        return view ('customer_panel.numbers_in_my_account.call_forwading_manager');
    }
}
