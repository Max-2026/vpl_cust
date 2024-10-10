<?php

namespace App\Http\Controllers;

use App\Mail\OtpMail;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('forgot-password.index');
    }

    public function send_otp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user) {
            return back()->withErrors(['email' => 'Email not found.']);
        }
        $user_otp = Otp::where('user_id', $user->id)->first();
        $otp = rand(100000, 999999);

        if ($user_otp) {
            $user_otp->user_id = $user->id;
            $user_otp->otp = $otp;
            $user_otp->otp_expires_at = now()->addMinutes(5);
            $user_otp->save();
        } else {
            $user_otp = new Otp();
            $user_otp->user_id = $user->id;
            $user_otp->otp = $otp;
            $user_otp->otp_expires_at = now()->addMinutes(5);
            $user_otp->save();
        }

        session(['otp_email' => $user->email]);

        Mail::to($user->email)->send(new OtpMail($otp));

        return redirect('/otp/verify')->with('success', 'OTP sent to your email.');
    }

    public function view_verify_otp()
    {
        $email = session('otp_email');

        return view('forgot-password.otp_verify', [
            'email' => $email,
        ]);
    }

    public function verify_otp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|numeric',
        ]);

        $user = User::where('email', $request->email)->first();

        $user_otp = Otp::where('user_id', $user->id)->first();

        if (! $user || $user_otp->otp != $request->otp || now()->greaterThan($user_otp->otp_expires_at)) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
        }

        $token = Str::random(60);
        $user_otp = Otp::where('user_id', $user->id)->first();

        $user_otp->user_id = $user->id;
        $user_otp->password_reset_token = $token;
        $user_otp->otp = null;
        $user_otp->save();

        return redirect()->route('reset-password', ['token' => $token]);
    }

    public function show_reset_form($token)
    {
        $token = Otp::where('password_reset_token', $token)->first();

        if (! $token) {
            return redirect('/forgot-password')->withErrors(['token' => 'Invalid or expired token.']);
        }
        $email = session('otp_email');

        return view('forgot-password.reset-password', [
            'email' => $email,
        ]);
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user) {
            return redirect('/forgot-password')->withErrors(['email' => 'Invalid email.']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        $user_otp = Otp::where('user_id', $user->id)->first();
        $user_otp->delete();

        session()->forget('otp_email');

        return redirect()->route('login')->with('status', 'Password successfully updated.');
    }
}
