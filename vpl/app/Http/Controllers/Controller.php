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

public function Announcement(){
    return view ('customer_panel.Inbox.Announcements');
}

public function Report_a_Problem(){
    return view ('customer_panel.Inbox.Report_a_Problem');
}
public function archive(){
    return view ('customer_panel.Inbox.archive');
}
public function makeawish(){
    return view ('customer_panel.Inbox.make_a_wish');
}
public function messageinbox(){
    return view ('customer_panel.Inbox.message_inbox');
}
public function inboxdetails(){
    return view ('customer_panel.Inbox.Inbox_Details');
}
public function mycart(){
    return view ('customer_panel.my_cart.my_cart');
}
public function numbers_in_my_account(){
    return view ('customer_panel.numbers_in_my_account.numbers_in_my_account');
}

}

