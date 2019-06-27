<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Mail;
use App\Mail\SendMail;



class SendEmailController extends Controller
{
    //
    function send(Request $request)
    {

    	//dd('frank');

        $data = array(
            'name'      =>  'Frank',
            'message'   =>   'Message Body'
        );

     Mail::to($request->session()->get('exhibitor')->email)->send(new SendMail($data));
     return view('ticket')->with('success', 'Thanks for contacting us!');

    }
}
