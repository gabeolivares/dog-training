@extends('layout')

@section('head')
<link rel="stylesheet" href="/css/services.css">
@stop

@section('content')

<section>
  <div class="text">
    <h1>Exclusive Services</h1>

    <p>
      Doggy Day Care(Cage-free) we are trained professionals, midday potty breaks/exercise,
      midday medications drop-ins, dogs are monitored 24/7
    </p>
  </div>

  <hr />

  <div id="exclusive" class="banner">
    <img src="//res.cloudinary.com/thebarkinbonesinn/image/upload/c_scale,w_1920/v1471329664/services/exclusive.jpg" />
  </div>

  <hr />

  <div class="row descriptions">
    <div class="col-md-3">
      <h4>Bark-O-Fun(Doggy Daycare)</h4>
      <p>$25/day</p>
    </div>

    <div class="col-md-3">
      <h4>Pet Taxi</h4>
      <p>10-30 Round Trip(Rates are based off location) Taxi runs AM-Midday-PM</p>
    </div>

    <div class="col-md-3">
      <h4>BizzyBone</h4>
      <p>Frozen stuffed goodie Kong $5</p>
    </div>

    <div class="col-md-3">
      <h4>30 minutes Bark Walk</h4>
      <p>$15(boarding rate)</p>
    </div>
  </div>

</section>

@stop

@section('footer')
<!-- Load specific JS  -->
@stop
