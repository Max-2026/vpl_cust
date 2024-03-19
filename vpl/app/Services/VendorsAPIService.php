<?php

namespace App\Services;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;

class VendorsAPIService
{
    protected $vendors;
    protected $vendor = null;

    public function __construct(array $vendors)
    {
        $this->vendors = $vendors;
    }

    public function vendor($vendor_name)
    {
        foreach ($this->vendors as $vendor) {

            if (get_class($vendor) === "App\VendorsAPI\\{$vendor_name}") {
                $this->vendor = $vendor;

                return $this;
            }
        }

        return $this;
    }

    public function get_numbers(
        $country_dial_code,
        $prefix = null,
        $per_page = 10
    )
    {
        $cache_key = 'vendor_api_' . $country_dial_code . '_' . $prefix;
        $cache_duration = now()->addMinutes(
            config('vendors_api.config.cache_duration')
        );

        $response = Cache::remember(
            $cache_key,
            $cache_duration,
            function () use ($country_dial_code, $prefix) {
                return $this->vendor->fetch_numbers(
                    $country_dial_code,
                    $prefix
                );
            }
        );

        return $this->format_response(
            $response,
            $this->vendor::MAPPING,
            $per_page
        );
    }

    private function extract_field($data, $field)
    {
        $keys = explode('.', $field);

        foreach ($keys as $key) {

            if (isset($data[$key])) {
                $data = $data[$key];
            } else {

                return null;
            }
        }

        return $data;
    }

    private function format_response($response, $mapping, $per_page)
    {
        $data = [];

        foreach ($response as $item) {
            $extracted_field = [];

            foreach ($mapping as $common_field => $vendor_field) {
                $extracted_field[$common_field] = $this->extract_field(
                    $item,
                    $vendor_field
                );
            }
            $data[] = $extracted_field;
        }

        $page = LengthAwarePaginator::resolveCurrentPage();
        $paginated_data = array_slice(
            $data,
            ($page - 1) * $per_page,
            $per_page
        );
        $paginator = new LengthAwarePaginator(
            $paginated_data,
            count($data),
            $per_page,
            $page
        );

        return $paginator->withPath(request()->url());
    }
}
