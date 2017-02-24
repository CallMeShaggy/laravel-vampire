<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function sendEmail()
    {
        Mail::send('emails.contact', array('data' => $_POST), function($message) {
            $message->from('contact.legendofthevampires@gmail.com', 'Legend of the Vampires');
            $message->to('the.great.vampire.slayer@gmail.com', 'new mail');
        });

        return Redirect::to('/');
    }
}
