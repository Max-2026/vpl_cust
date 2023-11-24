<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inbox extends Controller
{
 
    public function msginbox(){
        return view('customer_panel.Inbox.message_inbox');
    }

    public function announcemnets(){
        return view('customer_panel.Inbox.Announcements');
    }

    public function reportproblem(){
        return view('customer_panel.Inbox.Report_a_Problem');
    }

    public function makewish(){
        return view('customer_panel.Inbox.make_a_wish');
    }
}
