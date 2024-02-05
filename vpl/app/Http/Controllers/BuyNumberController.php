<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

use App\Models\Country;
use App\Models\Number;
use App\Models\Area;



class BuyNumberController extends Controller
{
   public function buy_number()
    {
        $countries = Country::all();
        $apiData = '';
        $AreaCode = '';
        return view('customer_panel.Buy_Numbers.buy_number', [
            'countries' => $countries,
            'AreaCode' => $AreaCode,
            'apiData' => $apiData

        ]);
    }

    public function buy_golden_number()
    {
        return view('customer_panel.Buy_Numbers.golden_numbers');
    }


    
}
