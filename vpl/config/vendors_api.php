<?php

return [
    'didx' => [
        'api_key' => env('VENDOR_DIDX_API_KEY'),
        'api_secret' => env('VENDOR_DIDX_API_SECRET'),
    ],
    'config' => [
        'cache_duration' => env('VENDORS_API_CACHE_DURATION', 5),
    ],
];
