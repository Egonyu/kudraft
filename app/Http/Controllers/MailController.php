<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }

    public function sendmail(Request $get)
    {
        $this->Validate($get, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $name = $get->name;
        $email = $get->email;
        $message = $get->message;

        Mail::to($email)->send(new SendEmail($name, $email, $message));
    }
}
