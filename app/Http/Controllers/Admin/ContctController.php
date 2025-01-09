<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContctController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact.index', compact('contacts'));
    }
}
