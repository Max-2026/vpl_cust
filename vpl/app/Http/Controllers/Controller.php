<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
use AuthorizesRequests, ValidatesRequests;


public function buynumber(){
return view ('customer_panel.Buy_Numbers.buy_number');
}
public function goldennumber(){
return view ('customer_panel.Buy_Numbers.golden_numbers');
}
}
