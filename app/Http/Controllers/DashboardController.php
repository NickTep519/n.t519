<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class DashboardController extends Controller
{
    public function index() {

        $contacts = Contact::query()->orderBy('created_at', 'desc')->get() ; 

        return view('dashboard', [
            'contacts' => $contacts
        ]);

    }

    public function contact( Contact $contact ) {

        return view('contact.show', [

            'contact' => $contact
        ]) ; 
    }
}
