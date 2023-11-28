<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();
        
        return view('contact.index', compact('contacts'));
        // foreach ($contacts as $contact){
        //     echo $contact->name.'<br>';
        // }
    }

    public function store()
    {
        Contact::create([
            'name' => 'Carl'
        ]);

        return back();
    }
}
