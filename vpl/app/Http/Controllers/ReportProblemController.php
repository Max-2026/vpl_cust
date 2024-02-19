<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportProblemController extends Controller
{
    public function report_problem()
    {
        $user = Auth::user();
        return view('customer_panel.Inbox.Report_a_Problem',
        [
            'user' => $user
        ]);
    }
}
