<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Auth;
use App\Contact;

class ContactController extends Controller
{
    function index()
    {
        return view('contact');
    }

    function store(ContactRequest $request)
    {
        $contact = new Contact;

        if (Auth::check()) {
            $contact->contact_name = $request->user()->name;
            $contact->contact_email = $request->user()->email;
        } else {
            $contact->contact_name = $request->name;
            $contact->contact_email = $request->mail;
        }
        
        $contact->contact_message = $request->message;
        $contact->save();

        return view('confirm');
    }
}
