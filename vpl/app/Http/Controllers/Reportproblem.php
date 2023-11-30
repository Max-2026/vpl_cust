<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reportproblem extends Controller
{
 

    public function reportproblem(){
        return view('customer_panel.Inbox.Report_a_Problem');
    }

}
