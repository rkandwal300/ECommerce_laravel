<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    function index (Request $request ) {
        $email=$request['email'];
        $subject=$request['subject'];
        $message=$request['message'];
        
        $request->validate([
            'email' =>'required' ,
            'subject' =>'required' ,
            'message' =>'required' ,
        ]) ;
        // echo $email."<br>" ;
        // echo $subject."<br>";
        // echo $message."<br>" ;
        $status = true ;
        $token=compact('status');
        return view('Contact')->with($token) ;
    }
}
