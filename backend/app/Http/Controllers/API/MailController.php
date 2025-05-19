<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\NewLeadNotification;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendLeadNotification(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'service' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        $lead = $request->only(['name', 'email', 'phone', 'service', 'message']);

       Mail::to([
    'manshu.developer@gmail.com',
    'Vishalrajput21930@gmail.com'
])->send(new NewLeadNotification($lead));


        return response()->json(['message' => 'Lead notification sent successfully!']);
    }
}
