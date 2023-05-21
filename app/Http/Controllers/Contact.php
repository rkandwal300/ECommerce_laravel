<?php

namespace App\Http\Controllers;

use Response;
use App\Models\User;
use GuzzleHttp\Psr7\Response as Psr7Response;
use Illuminate\Http\Request;

class Contact extends Controller
{
    public function index (Request $request ) {
        $data = $request -> all() ;
        $email=$data['email'];
        $subject=$data['subject'];
        $message=$data['message'];
        
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
    public function SaveProducts(Request $request){
        $data = $request -> all() ;
        echo "working " ;

        return 'world';

    }
}
