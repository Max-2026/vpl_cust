<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;
use App\Models\Number;
use App\Models\Area;



class BuyNumberController extends Controller
{
    public function buy_number()
    {
        $result = Country::where('code')->get();

        $result1 = Area::where('country_id',$result)->get();
        $countries = Country::all();
        $search_query = Area::where('name')->get();


        return view('customer_panel.Buy_Numbers.buy_number', [
            'countries' => $countries,
            'result'  => $result,
            'result1' => $result1,
            'search_query' => $search_query

        ]);
    }

    public function buy_golden_number()
    {
        return view('customer_panel.Buy_Numbers.golden_numbers');
    }

    public function search(Request $request)
    {
        $countryNumber = $request->input('dynamicOptionsInput');
        $countryId = $request->input('countrySelect');
    
        // Check if $countryId is empty
        if (empty($countryId)) {
            return redirect()->back()->with('error', 'Please select a country.');
        }
    
        $result = Country::where('code', $countryId)->get();
    
        $firstResult = $result->first();
    
        $result1 = Area::where('country_id', $firstResult->id)->get();
    
        $countries = Country::all();
        $search_query = Area::where('name')->get();

    
        return view('customer_panel.Buy_Numbers.buy_number', [
            'countries' => $countries,
            'result'  => $result,
            'result1' => $result1,
            'search_query' => $search_query
        ]);
    }

    public function search_city_number($city){

        $search_query = Area::where('name', $city)->first();

        $search_query = Number::where('area_id', $search_query->id)->get();


        $countries = Country::all();
        $result1 = Area::where('country_id')->get();

        return view('customer_panel.Buy_Numbers.buy_number', [
            'result1' => $result1,
            'countries' => $countries,
            'search_query' => $search_query,
        ]);
    }
    
}
