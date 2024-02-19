<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


use App\Models\Country;
use App\Models\Area;
use App\Models\Number;
use App\Models\Cart;

class ApiController extends Controller
{
    public function getDIDAreaCodes(Request $request)
    {
        if ($request->isMethod('post')) {
            try {
                // Get the values from the request
                $countryId = $request->input('countrySelect');
                $dynamicOptionsInput = $request->input('dynamicOptionsInput');
    
                // Determine which value to use for the CountryCode parameter
                $countryCode = $countryId ? $countryId : $dynamicOptionsInput;
    
                $userId = env('DIDX_USER_ID');
                $password = env('DIDX_PASSWORD');
    
                // Make the API call
                $response = Http::get("https://newapi.didx.net/DidxApis/api/getDIDArea.php", [
                    'UserID' => $userId,
                    'Password' => $password,
                    'CountryCode' => $countryCode,
                ]);
    
                // Get the response data
                $AreaCode = $response->json();
                $apiData = '';
                $user = Auth::user();
    
                // Get countries data
                $countries = Country::all();
                
                // Return the view with the retrieved data
                return view('customer_panel.Buy_Numbers.buy_number', [
                    'AreaCode' => $AreaCode,
                    'countries' => $countries,
                    'apiData' => $apiData,
                    'user' => $user
                ]);
            } catch (\Exception $e) {

                Log::error('Error fetching data from DIDX API: ' . $e->getMessage());                
                return view('internet_error');
            }
        } else {
            return redirect('/buy_number'); // Redirect to the home page
        }
    }
    

    public function getAvailableNumbers(Request $request)
    {
        if ($request->isMethod('post')) {
            try {
                $country_code = intval($request->input('areaValue1'));
                $area_code = intval($request->input('areaValue2'));
        
                $userId = env('DIDX_USER_ID');
                $password = env('DIDX_PASSWORD');
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
                $user = Auth::user();
            
                return view('customer_panel.Buy_Numbers.buy_number', [
                    'countries' => $countries,
                    'apiData' => $apiData,
                    'AreaCode' => $AreaCode,
                    'user' => $user
                ]);
            } catch (\Exception $e) {

                Log::error('Error fetching available numbers from DIDX API: ' . $e->getMessage());
                
                return view('internet_error');
            }
        }
         else {
            return redirect('/buy_number'); 
        }
    }


    public function number_reserved(Request $request)
    {
        try {
            $selectedNumbersJson = $request->input('selectedNumbers');
            $selectedNumbers = json_decode($selectedNumbersJson, true);
        
            if (is_array($selectedNumbers)) {
                foreach ($selectedNumbers as $value) {
                    $number = $value['number'];
        
                    $this->reserveNumbers($number);
        
                    $cart = new Cart();
                    $cart->user_id = Auth::user()->id;
                    $cart->number = $value['number'];
                    $cart->area = $value['area'];
                    $cart->country = $value['country'];
                    $cart->billing_type = $value['billing_type'];
                    $cart->setup_cost = $value['setupCost'];
                    $cart->monthly_charges = $value['monthlyCharges']; 
                    $cart->annual_charges = 0; 
                    $cart->monthly_plan = 0; 
                    $cart->plan_setup = 0; 
                    $cart->save();
                }
            } else {
                // Return an error message
                return redirect()->back()->with('error', 'Selected numbers data is not in the expected format.');
            }
        
            // Redirect to the cart page
            return redirect('/my_cart')->with('success', 'Numbers successfully reserved.');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error reserving numbers: ' . $e->getMessage());
            
            // Return an error message
            return view('internet_error');
        }
    }


    private function reserveNumbers($number)
    {
        try {
            $userId = env('DIDX_USER_ID');
            $password = env('DIDX_PASSWORD');

            $response = Http::get("https://newapi.didx.net/DidxApis/api/ReserveDIDByNumber.php", [
                'UserID' => $userId,
                'Password' => $password,
                'DIDNumber' => $number, 
            ]);

            if ($response->successful()) {

                Log::info('Successfully reserved number: ' . $number);
            }
             else {
                Log::error('Failed to reserve number: ' . $number . '. Response: ' . $response->body());
                throw new \Exception('Failed to reserve number: ' . $number);
            }
            } 
            catch (\Exception $e) {
                Log::error('Error reserving number: ' . $number . '. ' . $e->getMessage());
                throw $e;
            }
    }


    public function unreserve_number($number)
    {
        try {
            $userId = env('DIDX_USER_ID');
            $password = env('DIDX_PASSWORD');

            // Make a request to unreserve the number
            $response = Http::get("https://newapi.didx.net/DidxApis/api/UnreserveDIDByNumber.php", [
                'UserID' => $userId,
                'Password' => $password,
                'DIDNumber' => $number,
            ]);

            // Check if the request was successful
            if ($response->successful()) {
                // Delete the corresponding cart entry
                $cart = Cart::where('number', $number)->first();
                if ($cart) {
                    $cart->delete();
                }
                // Redirect to the cart page
                return redirect('/my_cart')->with('success', 'Number successfully unreserved.');
            } else {
                // Log the error message
                Log::error('Failed to unreserve number: ' . $number . '. Response: ' . $response->body());
                // Redirect with an error message
                return redirect()->back()->with('error', 'Failed to unreserve number. Please try again later.');
            }
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error unreserving number: ' . $number . '. ' . $e->getMessage());
            // Redirect with an error message
            return view('internet_error');
        }
    }

    
}