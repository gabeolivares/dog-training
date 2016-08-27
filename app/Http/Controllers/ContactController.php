<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mailgun\Mailgun;

class ContactController extends Controller
{
    public function index()
    {
      return view('contact');
    }

    public function send(Request $request)
    {
      $this->validate($request, [
        'email' => 'required|email'
      ]);

      $input = $request->input();

      $fullName = $input['first_name'] . " " . $input['last_name'];
      $mg = new Mailgun(env('MAILGUN_API_KEY'));
      $domain = 'thebarkinbonesinn.com';

      $mg->sendMessage($domain, [
        'from'    => $input['email'],
        'to'      => 'thebarkinbonesinn@gmail.com',
        'subject' => $fullName . ' - New Contact',
        'text'    => $input['comments']
      ]);

      return ['status' => 'success', 'message' => 'Your email has been sent!'];
    }
}
