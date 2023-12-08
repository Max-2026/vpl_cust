<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailVerificationController extends Controller
{
    public function notice()
    {
        return 'Check your email we have sent you an verification email.';
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
 
        return redirect('/');
        // return redirect('/dashboard');
    }
}
