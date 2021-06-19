<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function SendEmail()
    {
        $details = [
            'title' => 'Mail from Testing App',
            'body' => 'This is for Testing mail using gmail'
        ];
        Mail::to("abhijeetk.singh30@gmail.com")->send(new TestMail($details));
        return "Email sent";
    }
}
