<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
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
        $contact->contact_name = $request->name;
        $contact->contact_email = $request->mail;
        $contact->contact_message = $request->message;
        $contact->save();

        return view('confirm');
    }
}
