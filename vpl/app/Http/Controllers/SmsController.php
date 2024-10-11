<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SmsController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $numbers = Number::where('current_user_id', $user->id)->get();
        $messages = Message::withWhereHas(
            'number',
            function ($query) use ($user, $request) {
                $query->where('current_user_id', $user->id)
                ->when(
                    $request->search_number,
                    function ($q) use ($request) {
                        $q->where('number', $request->search_number);
                    }
                );
            }
        )->get();

        return view('sms.index', [
            'messages' => $messages,
            'user' => $user,
            'numbers' => $numbers,
        ]);
    }

    public function view_send_sms()
    {
        $user = Auth::user();
        $messages = Message::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')->get();
        $numbers = Number::where('current_user_id', $user->id)->get();

        return view('sms.send-sms', [
            'numbers' => $numbers,
            'messages' => $messages,
            'user' => $user,
        ]);
    }
}
