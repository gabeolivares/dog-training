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
    return view('services.grooming');
  }

  public function training()
  {
    return view('services.training');
  }

  public function exclusive()
  {
    return view('services.exclusive');
  }

  public function daycare()
  {
    return view('services.daycare');
  }
}
