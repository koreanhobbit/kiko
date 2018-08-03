<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
    	//validate the message
    	$this->validate($request, [
    		'name' => 'required|string|max:255',
    		'email' => 'required|email|max:255',
    		'subject' => 'required|string|max:255',
    		'message' => 'required|string',
    		//put the recaptcha
    	]);

    	//store the message
    	$contactmessage = \App\ContactMessage::addNewContactMessage($request);

    	//make response connection and add response status
    	//
    	$responsemessage = new \App\ResponseMessage;
    	$responsemessage->contact_message_id = $contactmessage->id;
    	$responsemessage->save();

    	return back()->with('contactmessage', 'Your message was sent successfully. We will contact you soon!');
    }
}
