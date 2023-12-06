<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportProblemController extends Controller
{
    public function report_problem()
    {
        return view('customer_panel.Inbox.Report_a_Problem');
    }
}
