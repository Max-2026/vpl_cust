<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VendorsAPIService;

class HomeController extends Controller
{
    public function index() {
        return view('master');
    }

    public function test(VendorsAPIService $vendorsAPIService) {
        dd($vendorsAPIService);
    }
}
