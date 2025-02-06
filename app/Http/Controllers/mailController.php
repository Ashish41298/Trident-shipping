<?php

namespace App\Http\Controllers;

use App\Mail\Quotemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function sendmail(Request $request){

        $validated = $request->validate([
            "nm" => "required",
            "cn" => "required",
            "lo" => "required",
            "ph" => "required",
            "email" => "required",
            "Message" => "required",
        ], [
            'nm.required' => 'Required full name.',
            'cn.required' => 'Required companyname.',
            'lo.required' => 'Required location.',
            'ph.required' => 'Required phone no.',
            'email.required' => 'Required email.',
            'Message.required' => 'Required message.',
        ]);
    
       $maildata = [
            "fullname"=>$validated['nm'],
            "companyname"=>$validated['cn'],
            "location"=>$validated['lo'],
            "phoneno"=>$validated['ph'],
            "email"=>$validated['email'],
            "message"=>$validated['Message'],
       ];
       $sub ="Quote mail";
        // Mail::to('ashishpatel41298@gmail.com')->queue(new Quotemail($sub));
        if(Mail::to($maildata['email'])->cc('mayurwebtech1000@gmail.com')->send(new Quotemail($maildata, $sub))){
            return redirect()->route('submit_details')->with('success', "Hello,"." ". $maildata['fullname']." ". "your information was sent successfully");             
        }else{  return redirect()->route('submit_details')->with('error', "email not sent! some error occured."); }
    }
}
