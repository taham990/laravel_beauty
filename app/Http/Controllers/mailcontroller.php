<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class mailcontroller extends Controller
{

    // public __constructor()
    // {
        
    // }
    public function send()
    {
        // $fromAddress = "my@gmail.com";
        // $to = "you@gmail.com";
        // $subject = 'پیام عضویت';
        // $body='عضویت شما در سایت با موفقیت انجام شد';
        // $fullname = ' اقای فلان ابن فلان';
        // $username = 'taham990';

        // if(Mail::to($to)->send(new TestMail($fromAddress ,$body , $subject , $fullname ,$username)))
        // return redirect('/cosmeticmanajment');
    }
}
