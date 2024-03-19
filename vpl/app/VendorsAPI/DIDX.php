<?php

namespace App\VendorsAPI;

use App\Contracts\VendorAPI;
use Illuminate\Support\Facades\Http;

class DIDX implements VendorAPI
{
	private $base_url = 'https://newapi.didx.net';

	const MAPPING = [
		'number' => 0,
		'per_minute_charges' => 3,
		'monthly_charges' => 2,
		'setup_charges' => 1,
		'country' => 5,
		'city' => 6
	];

	public function fetch_numbers($country_dial_code, $prefix = null)
	{
		// Get Area ID by providing Country ID
        $response = Http::get(
        	"{$this->base_url}/DidxApis/api/getDIDArea.php",
        	[
	            'UserID' => config('vendors_api.didx.api_key'),
	            'Password' => config('vendors_api.didx.api_secret'),
	            'CountryCode' => $country_dial_code,
	        ]
	    );
	    $areas = $response->json();
	    array_shift($areas);
	    $area_code = $areas[0][0];
	    $area_name = $areas[0][1];

	    // Get avialable numbers in a specific area
	    $response = Http::get(
	    	"{$this->base_url}/DidxApis/api/getAvailableDIDS.php",
	    	[
                'UserID' => config('vendors_api.didx.api_key'),
                'Password' => config('vendors_api.didx.api_secret'),
                'CountryCode' => $country_dial_code,
                'AreaCode' => $area_code,
            ]
	    );
	    $numbers = $response->json();
	    array_shift($numbers);

	    return $numbers;
	}

	public function reserve($number)
	{
		$response = Http::get(
			"{$this->base_url}/DidxApis/api/ReserveDIDByNumber.php",
			[
                'UserID' => config('vendors_api.didx.api_key'),
                'Password' => config('vendors_api.didx.api_secret'),
                'DIDNumber' => $number, 
            ]
        );

        return $response->successful();
	}

	public function unreserve($number)
	{
        $response = Http::get(
			"{$this->base_url}/DidxApis/api/UnreserveDIDByNumber.php",
			[
                'UserID' => config('vendors_api.didx.api_key'),
                'Password' => config('vendors_api.didx.api_secret'),
                'DIDNumber' => $number, 
            ]
        );

        return $response->successful();
	}

	public function purchase($number)
	{
        $response = Http::get(
			"{$this->base_url}/DidxApis/api/BuyDIDByNumber.php",
			[
                'UserID' => config('vendors_api.didx.api_key'),
                'Password' => config('vendors_api.didx.api_secret'),
                'DIDNumber' => $number, 
            ]
        );

        return $response->successful();
	}
	
	public function release($number)
	{}
}
