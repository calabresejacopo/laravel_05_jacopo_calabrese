<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;



class PublicController extends Controller
{
    public function homepage() {
        return view('homepage');
    }
     public function about() {
        return view('about');
    }
    public function contact(){
        return view('contattaci');
    }
     public function thankYou(){
        return view('thankYou');
    }
    public function submit(Request $request){
        $name = $request->input('username');
        $email = $request->input('email');
        $usermessage = $request->input('message');
      
        Mail::to($email)->send(new ContactMail($name, $email, $usermessage));
        
        return redirect()->route('thankyou.page');

    }
};
   
