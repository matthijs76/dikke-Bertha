<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function create() {
        return view('contact');
    }
    public function store(Request $request) {
       $this->validate($request, [
           'firstname' => 'required',
           'lastname' => 'required',
           'email' => 'required|email',
           'message'=> 'required'
       ]);
       Mail::send('emails.contact-message', [
           
           'email'=>$request->email,
           'lastname'=>$request->lastname,
           'msg' => $request->message

       ], function ($mail) use($request) {
           $mail->from($request->email, $request->firstname, $request->lastname);

           $mail->to('dikkebertha0@gmail.com')->subject('Post voor Bertha');
       });
        return redirect()->back()->with('flash_message', 'Bedankt voor uw bericht.');
    }
}
