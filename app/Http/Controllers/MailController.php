<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
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

        try {
            Mail::to($request->email)->send(new DemoMail($mailData));

            Log::info('Email sent successfully', [
                'recipient' => $request->email,
                'subject' => $request->subject,
            ]);

            return redirect()->route('mail')->with('success', 'Email sent successfully.');
        } catch (\Exception $e) {
            Log::error('Failed to send email', [
                'recipient' => $request->email,
                'subject' => $request->subject,
                'error' => $e->getMessage(),
            ]);

            return redirect()->back()->with('error', 'Failed to send email.');
        }
    }
}
