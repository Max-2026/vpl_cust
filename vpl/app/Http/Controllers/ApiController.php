<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


use App\Models\Country;
use App\Models\Area;
use App\Models\Number;

class ApiController extends Controller
{
    public function search_areas_by_country($country_name)
    {
        $country = Country::where('name', lcfirst(trim($country_name)))
            ->first();
        
        if (empty($country)) {
            return response()->json([
                'message' => 
                    "No country found with the name: `$country_name`"
            ], 404);
        }

        if ($country->areas->count() === 0) {
            return response()->json([
                'message' => 
                    "No areas found for the country: `$country->name`"
            ], 404);
        }
        return $country->areas;
    }



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

    public function number_reserved($number){


    dd($number);
    }
    



    
    
}