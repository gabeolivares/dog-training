<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServicesController extends Controller
{
  public function index()
  {
    return view('services.index');
  }

  public function boarding()
  {
    return view('services.boarding');
  }

  public function grooming()
  {
    return view('services.boarding');
  }

  public function training()
  {
    return view('services.boarding');
  }

  public function exclusive()
  {
    return view('services.exclusive');
  }
}
