<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\GoogleMail;
use Illuminate\Support\Facades\Mail;


class MailSender extends Controller
{
     //this method will return will the contacts list
     public function list(){
        return view('webProjetDb/clientViews.contacte');
    }
    
    //this method Gets the submited data and sends to Milaable class
    public function sendEmail(Request $request){
        $details = [
            'title'=>$request->title,
            'body'=>$request->body
        ];
       Mail::to("$request->to")->send(new GoogleMail($details));
       //returns back to the list with success message
       return redirect()->route('list')
        ->with('success','Email Sent Successfully!');
   }
}
