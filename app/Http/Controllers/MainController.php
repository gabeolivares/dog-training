<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Firebase\FirebaseLib;
use App\Http\Requests;

class MainController extends Controller
{
  protected $firebase;

  public function __construct(FirebaseLib $firebase) {
    $this->firebase = $firebase;
  }

  public function index()
  {
    $reviews = json_decode($this->firebase->get('/reviews', ['orderBy' => '"approved"', 'equalTo'=> 'true']));

    return view('home')->with('reviews', $reviews);
  }

  public function about()
  {
    return view('about');
  }

  public function services()
  {
    return view('services');
  }

  public function gallery()
  {
    return view('gallery');
  }

  public function submitReview()
  {
    return view('submit-review');
  }

  public function reviews()
  {
    return view('reviews');
  }
}
