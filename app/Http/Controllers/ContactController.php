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
        $recaptcha = $_POST['g-recaptcha-response'];
        $verified = $this->verifyResponse($recaptcha);

        if ($verified["success"]) {
            Mail::send('emails.contact', array('data' => $_POST), function($message) {
                $message->from('contact.legendofthevampires@gmail.com', 'Legend of the Vampires');
                $message->to('the.great.vampire.slayer@gmail.com', 'new mail');
            });
        }

        return Redirect::to('/');
    }

    public function verifyResponse($recaptcha){

        $remoteIp = $this->getIPAddress();
        // Discard empty solution submissions
        if (empty($recaptcha)) {
            return array(
                'success' => false,
                'error-codes' => 'missing-input',
            );
        }
        $getResponse = $this->getHTTP(
            array(
                'secret' => "6LeyBh0UAAAAAM8v-DK2auemkBOjrqhpKbv_YhnV",
                'remoteip' => $remoteIp,
                'response' => $recaptcha,
            )
        );
        // get reCAPTCHA server response
        $responses = json_decode($getResponse, true);
        if (isset($responses['success']) and $responses['success'] == true) {
            $status = true;
        } else {
            $status = false;
            $error = (isset($responses['error-codes'])) ? $responses['error-codes']
                : 'invalid-input-response';
        }
        return array(
            'success' => $status,
            'error-codes' => (isset($error)) ? $error : null,
        );
    }

    private function getIPAddress(){
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
        {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return $ip;
    }

    private function getHTTP($data){
        $url = 'https://www.google.com/recaptcha/api/siteverify?'.http_build_query($data);
        $response = file_get_contents($url);
        return $response;
    }
}
