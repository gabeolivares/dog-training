@extends('layout')

@section('head')
<link rel="stylesheet" href="/css/services.css">
@stop

@section('content')

<section>
  <div class="text">
    <h1>Dog Boarding</h1>

    <p>
      Dog boarding is tailor specifically for your dogs needs.
      There are several options to chose from. This is an around the clock facility to dogs.
    </p>
  </div>

  <hr />

  <div id="boarding" class="banner">
    <img src="//res.cloudinary.com/thebarkinbonesinn/image/upload/c_fill,g_face,h_1280,w_1920/v1471329661/services/boarding.jpg" />
  </div>

  <hr />

  <div class="row descriptions">

    <div class="col-md-4 offer">
      <h3>Overnight Slumber - $35/Night</h3>

      <p>4 potty breaks</p>
      <p>Feeding</p>
      <p>Cozy blanket to sleep on</p>
    </div>

    <div class="col-md-4 offer">
      <h3>Premium Slumber - <span>$45/Night</spn></h3>

      <p>4 potty breaks</p>
      <p>Midday play</p>
      <p>Feeding</p>
      <p>Plush bed to sleep on</p>
      <p>Daily photo updates</p>
    </div>

    <div class="col-md-4 offer">
      <h3>Kitchen Boarding - <span>$55/Night</spn></h3>

      <p>Includes all of Premium boarding advantages plus:</p>
      <p>A crate free environment</p>
      <p>Elevated poochie cot and toys</p>
      <p>Constant attention from the crew</p>
      <p>Pet guest must qualify for Kitchen Boarding and pass a free evaluation.</p>
      <div class="price-change">*Pet insurance is required for Kitchen Boarding the cost is $50 per fiscal year*</div>
    </div>
  </div>

  <div class="row descriptions">
    <div class="col-md-offset-2 col-md-8 offer">
      <h3 class="center">Boarding Add-On(s)</h3>

      <p>30 minutes Bark Walk - <b>$15 (Boarding Rate)</b></p>
      <p>Early Check In/Late Check Out - <b>$25 (Holiday Pickup - $40)</b></p>
      <p>Photo Updates - <b>$3/day</b></p>
      <p>Paw Wax - <b>$3/day</b></p>
      <p>Administer Medications - <b>$2/day</b></p>
      <p>Insulin/Steroids Injections - <b>$10/day</b></p>
      <p>We proudly serve Fromms Gold line dog food - <b>$3/day</b></p>
      <div class="price-change">*Inquire about additional slumber upgrades*</div>
    </div>
  </div>

  <div class="price-change">
    Multiple Pet Boarding: <br />
    When boarding in the same room we offer a 25% discount off the first
    additional pet &amp; 50% off each subsequent pet.
  </div>

</section>

@stop

@section('footer')
<!-- Load specific JS  -->
@stop
