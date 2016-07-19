<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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
      // $input['email'];
      // $input['first_name'];
      // $input['last_name'];
      // $input['comments'];
      
      // TODO - Setup mailgun
      // TODO - Send validate email and message
      // TODO - Send email via mailgun

      return ['status' => 'success', 'message' => 'Your email has been sent!'];
    }
}
