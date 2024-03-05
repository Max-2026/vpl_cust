<?php

namespace App\VendorsAPI;

use Illuminate\Support\Facades\Http;

class DIDX implements VendorInterface
{
	private $base_url = 'https://newapi.didx.net';

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
	    $numbers = array_column($response->json(), 0);

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
