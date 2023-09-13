<?php

namespace App\Http\Controllers;
use App\Notifications\ContactFormMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\Recipient;

class ContactController extends Controller
{
    public function show(){
        return view('contact.index');
    }
    public function mailContactForm(ContactFormRequest $message, Recipient $recipient)
    {
        $recipient->notify(new ContactFormMessage($message));

        return redirect()->back()->with('message', 'Thanks for contacting JW-8 Ltd. We\'ll get back to you as soon as possible');
    }
    
}
