<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\SendMessage;
use App\Models\Number;

class SmsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $number = Number::where('current_user_id', $user->id)->get();
        $numbers = Number::where('current_user_id', $user->id)->pluck('number');
        $messages = collect();
    
        if ($numbers->isNotEmpty()) 
        {
            $messages = SendMessage::whereIn('received_number', $numbers)
            ->orderBy('created_at', 'desc')->paginate(10);
        }
    
        return view('sms.index', [
            'messages' => $messages,
            'user' => $user,
            'number' => $number,
        ]);
    }
    

    public function view_send_sms()
    {
        $user = Auth::user();
        $messages = SendMessage::where('user_id', $user->id)
        ->orderBy('created_at', 'desc')->get();
        $numbers = Number::where('current_user_id', $user->id)->get();

        return view('sms.send-sms',[
            'numbers' => $numbers,
            'messages' => $messages,
            'user' => $user,
        ]);
    }

    public function send_message(Request $request)
    {
        $user = Auth::user();
        $charges = 5;
    
        if ($user->balance < $charges) 
        {
            return back()->with('error', 'Your balance is too low. Please add funds before sending the message.');
        }
    
        $message = new SendMessage();
        $message->user_id = $user->id;
        $message->number = $request->number;
        $message->received_number = $request->send_number;
        $message->date_time = now();
        $message->content = $request->message;
        $message->charges = $charges;
        $message->save();
    
        $user->balance -= $charges;
        $user->save();
    
        return redirect()->back()->with('success', 'Message sent successfully.');
    }    
    

    public function searchMessage(Request $request)
    {
        $user = Auth::user();
        $number = Number::where('current_user_id', $user->id)->get();
        $numbers = Number::where('current_user_id',$user->id)->pluck('number');

        if ($request->search_number && $request->search_number !== 'all') 
        {
            $messages = SendMessage::where('number',$request->search_number)->paginate(10);
        } else 
        {
            $messages = SendMessage::whereIn('number',$numbers)->paginate(10);
        }

        return view('sms.index', [
            'messages' => $messages,
            'user' => $user,
            'number' => $number
        ]);
    }

}