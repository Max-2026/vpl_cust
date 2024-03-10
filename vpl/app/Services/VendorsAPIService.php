<?php

namespace App\Services;

class VendorsAPIService
{
    protected $vendors;

    public function __construct(array $vendors)
    {
        $this->vendors = $vendors;
    }

    public function vendor($vendor_name)
    {
        foreach ($this->vendors as $vendor) {

            if (get_class($vendor) === "App\VendorsAPI\\{$vendor_name}") {
                return $vendor;
            }
        }
        return null;
    }
}
