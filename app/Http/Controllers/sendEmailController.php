<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Resend\Laravel\Facades\Resend;

class sendEmailController extends Controller
{
    public function send(Request $request): string
    {
        $request->validateWithBag('post', [
            'email' => "required|string",
            'subject' => "required|string",
            'message' => 'required|string',
        ]);

        //with resend driver
        Resend::emails()->send(['from' => 'MrXakim@resend.dev',
            'to' => $request['email'],
            'subject' => $request['subject'],
            'text' => $request['message']]);


        //with mailgun etc. drivers
//        Mail::to($request['email'])->send(new SendEmail($request['subject'], $request['message']));
//        Mail::to($request['email'])->later(now()->addSeconds(15),
//            (new SendEmail($request['subject'], $request['message']))->onQueue('sending-mails'));

        return redirect()->route('message-sent');
    }
}
