<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mailgun\Mailgun;
use Firebase\FirebaseLib;

class ContactController extends Controller
{
    protected $firebase;

    public function __construct(FirebaseLib $firebase) {
      $this->firebase = $firebase;
    }

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

    public function sendReview(Request $request)
    {
      $this->validate($request, [
        'full_name' => 'required|string',
        'message'   => 'required|string',
        'rating'    => 'required|integer'
      ]);

      $input = $request->input();

      $data = [
        'fullName'    => $input['full_name'],
        'message'     => $input['message'],
        'rating'      => $input['rating'],
        'image'       => '',
        'approved'    => false,
        'reviewed_on' => \Carbon\Carbon::now()->toCookieString()
      ];

      $this->firebase->push('/reviews', $data);

      return ['status' => 'success', 'message' => 'Review has been submitted.'];
    }
}
