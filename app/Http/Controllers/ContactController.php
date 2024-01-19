<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactUs;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function send()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);
        Mail::to('receipentemail@gmail.com')->send(new ContactUs($data));

        dd('sent');

    }


}
