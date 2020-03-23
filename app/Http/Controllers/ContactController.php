<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    function index()
    {
        return view('contact');
    }

    function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['bail', 'alpha_dash', 'min:3', 'max:255'],
            'mail' => ['required', 'email', 'max:255'],
            'message' => ['min:100']
        ]);

        $contact = new Contact;
        $contact->contact_name = $request->name;
        $contact->contact_email = $request->mail;
        $contact->contact_message = $request->message;
        $contact->save();

        return view('confirm');
    }
}
