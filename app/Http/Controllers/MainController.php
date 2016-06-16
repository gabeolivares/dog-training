<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
  public function index()
  {
    return "Home page";
  }

  public function about()
  {
    return "About page";
  }

  public function services()
  {
    return "Services page";
  }

  public function gallery()
  {
    return "Gallery page";
  }
}
