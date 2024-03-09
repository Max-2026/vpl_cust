<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoiceNumbersController extends Controller
{
    public function index(Request $request)
    {
        return view('voice-numbers.index');
    }
}
