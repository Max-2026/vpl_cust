<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Number;
use App\Models\UserWebhook;

class ApiIntegrationController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $numbers = $user->numbers()->select('number')->get();
        $webhooks = $user->webhooks()->with('number')->get();

        return view('api-integration.index', [
            'numbers' => $numbers,
            'webhooks' => $webhooks,
        ]);
    }

    public function sms_form(Request $request)
    {
        $number = Number::where('number', $request->phone_number)->first();

        $webhook = new UserWebhook;
        $webhook->user_id = $request->user()->id;
        $webhook->number_id = $number->id;
        $webhook->url = $request->url;
        $webhook->save();
    }
}
