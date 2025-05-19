<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewLeadNotification;

class LeadController extends Controller
{
        public function sendLeadEmail(Request $request)
    {
        $request->validate([
            'name'  => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        // Send email to admin
        Mail::to('admin@example.com')->send(new NewLeadNotification($request->all()));

        return response()->json([
            'message' => 'Lead email sent successfully!'
        ]);
    }

}
