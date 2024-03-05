<?php

namespace App\Services;

class VendorsAPIService
{
    protected $vendors;

    public function __construct(array $vendors)
    {
        $this->vendors = $vendors;
    }

    public function vendor($vendorName)
    {
        foreach ($this->vendors as $vendor) {

            if (get_class($vendor) === "App\VendorsAPI\\{$vendorName}") {
                return $vendor;
            }
        }
        return null;
    }
}
