<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('themes.layout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PostContact(ContactRequest $request)
    {
        $contact = $request->all();
        $post = Contact::create($contact);

        return view('themes.layout');
    }
    public function GetContact()
    {
        $contacts = Contact::all();

        return view('admin.contact.index', compact('contacts'));
    }
}
