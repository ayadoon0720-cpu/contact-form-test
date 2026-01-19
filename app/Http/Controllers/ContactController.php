<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Model\Contact;
use App\Model\Category;
use App\Model\User;

class ContactController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function confirm(ContactRequest $request)
  {
    $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'type', 'content']);
    
    return view('confirm', ['contact' => $contact]);
  }

  public function store(ContactRequest $request)
  {
    $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'type', 'content']);
    Contact::create($contact);

    return view('thanks');
  }
}
