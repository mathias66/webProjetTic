<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests\ContactRequest;

use App\Http\Requests\ImagesRequest;
use App\gestion\PhotoGestionInterface ;



class ContactController extends Controller
{
    public function getContact()
    {
        return view('webProjetDb/clientViews.contacte');
    }
    
    public function postContact(ContactRequest $request)
    {
       /**  return 'The enter name is ' . $request->input('first'); */
       
       Mail::send('webProjetDb/vueAdmin.contacteRecu', $request->all(), function($message) 
		{
			$message->to('mathiasvenkpe66@gmail.com')->subject('Contact');
		});

		return view('webProjetDb/clientViews.confirm');
    }

}
