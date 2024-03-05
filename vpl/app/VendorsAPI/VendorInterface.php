<?php

namespace App\VendorsAPI;

interface VendorInterface
{
	public function fetch_numbers($country_dial_code, $prefix = null);
	public function reserve($number);
	public function unreserve($number);
	public function purchase($number);
	public function release($number);
}
