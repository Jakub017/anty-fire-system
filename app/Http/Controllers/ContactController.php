<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send() {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'privacy_policy' => 'accepted',
        ]);

        Mail::to('j.lipinski017@gmail.com')->send(new ContactMail($data));
    }
}
