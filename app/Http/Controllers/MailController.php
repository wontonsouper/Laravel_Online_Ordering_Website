<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index()
    {
        return view('mail.send_email');
    }

    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $mailData = [
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to($request->email)->send(new DemoMail($mailData));

        return redirect()->route('mail')->with('success', 'Email sent successfully.');
    }
}
