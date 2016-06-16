<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    public function index()
    {
      return "Contact page";
    }

    public function send()
    {
      // TODO - Setup mailgun
      // TODO - Send validate email and message
      // TODO - Send email via mailgun

      return ['status' => 'success', 'message' => 'Your email has been sent!'];
    }
}
