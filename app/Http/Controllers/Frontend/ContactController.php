<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Get Contact
        $contacts = Contact::where('status', '=', 1)->get();

        return view('frontend.contact.index', compact('contacts'));
    }
}
