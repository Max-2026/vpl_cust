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
        )->paginate();

        return view('sms.index', [
            'messages' => $messages,
            'user' => $user,
            'numbers' => $numbers,
        ]);
    }
}
