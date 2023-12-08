<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function search_numbers_by_area($area_name)
    {
        $numbers = Number::whereHas(
            'area',
            function ($sub_query) use ($area_name) {
                $sub_query->where('areas.name', lcfirst(trim($area_name)));
            }
        )->get();

        if ($numbers->count() === 0) {
            return response()->json([
                'message' => 
                    "No numbers found for the area: `$area_name`"
            ], 404);
        }
        return $numbers;
    }

    public function search_numbers_by_country($country_name)
    {
        $numbers = Number::whereHas(
            'area.country',
            function ($sub_query) use ($country_name) {
                $sub_query->where(
                    'countries.name',
                    lcfirst(trim($country_name))
                );
            }
        )->get();

        if ($numbers->count() === 0) {
            return response()->json([
                'message' => 
                    "No numbers found for the country: `$country_name`"
            ], 404);
        }
        return $numbers;
    }
}
