<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

use App\Models\Country;
use App\Models\Area;
use App\Models\Number;
use App\Models\Cart;

class ApiController extends Controller
{
    public function getDIDAreaCodes(Request $request)
    {
        $countryId = $request->input('countrySelect');

        $userId = '700290';
        $password = 'ACJqm6Ndv123xx';
        $countryCode = $request->input('CountryCode', $countryId);
    
        $response = Http::get("https://newapi.didx.net/DidxApis/api/getDIDArea.php", [
            'UserID' => $userId,
            'Password' => $password,
            'CountryCode' => $countryCode,
        ]);
    
        $AreaCode = $response->json();
        $apiData = '';

        $countries = Country::all();
        // return view('', ['apiData' => $data]);
        return view('customer_panel.Buy_Numbers.buy_number',[
            'AreaCode' => $AreaCode,
            'countries' => $countries,
            'apiData' => $apiData,

        ]);
    }



    public function getAvailableNumbers(Request $request)
    {
        $country_code = intval($request->input('areaValue1'));
        $area_code = intval($request->input('areaValue2'));

    
        $userId = '700290';
        $password = 'ACJqm6Ndv123xx';
        $countryCode = $request->input('CountryCode', $country_code); 
        $areaCode = $request->input('AreaCode', $area_code); 
    
        $response = Http::get("https://newapi.didx.net/DidxApis/api/getAvailableDIDS.php", [
            'UserID' => $userId,
            'Password' => $password,
            'CountryCode' => $countryCode,
            'AreaCode' => $areaCode,
        ]);
    
        $apiData = $response->json();
        $countries = Country::all();
    
        $AreaCode = '';
    
        return view('customer_panel.Buy_Numbers.buy_number', [
            'countries' => $countries,
            'apiData' => $apiData,
            'AreaCode' => $AreaCode,
        ]);
    }


    public function number_reserved(Request $request)
    {
        $selectedNumbersJson = $request->input('selectedNumbers');
        $selectedNumbers = json_decode($selectedNumbersJson, true);
    
        if (is_array($selectedNumbers)) {
            foreach ($selectedNumbers as $value) {
                $number = $value['number'];
    
                // Reserve the number
                $this->reserveNumbers($number);
    
                // Save the reserved number to the database
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->number = $value['number'];
                $cart->area = $value['area'];
                $cart->country = $value['country'];
                $cart->billing_type = $value['billing_type'];
                $cart->setup_cost = $value['setupCost'];
                $cart->monthly_charges = $value['monthlyCharges']; // Assuming default value
                $cart->annual_charges = 0; // Assuming default value
                $cart->monthly_plan = 0; // Assuming default value
                $cart->plan_setup = 0; // Assuming default value
                $cart->save();
            }
        } else {
            echo 'Selected numbers data is not an array.';
        }
    
        return redirect('/my_cart');
    }


    private function reserveNumbers($number)
    {
        $userId = '700290';
        $password = 'ACJqm6Ndv123xx';

        $response = Http::get("https://newapi.didx.net/DidxApis/api/ReserveDIDByNumber.php", [
            'UserID' => $userId,
            'Password' => $password,
            'DIDNumber' => $number, // Use $number here
        ]);

    }


    public function unreserve_number($number){

        $cart = new Cart();

        $userId = '700290';
        $password = 'ACJqm6Ndv123xx';

        $response = Http::get("https://newapi.didx.net/DidxApis/api/UnreserveDIDByNumber.php", [
            'UserID' => $userId,
            'Password' => $password,
            'DIDNumber' => $number,
        ]);

        $carts = Cart::where('number', $number)->first();
        $carts->delete();
        return redirect('/my_cart');

    }

    
}