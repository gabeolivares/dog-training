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

    <div class="col-md-offset-3 col-md-3 offer">
      <h3>Overnight Slumber - $35/Night</h3>

      <div>
        <ul><li></li></ul>
      </div>

      <p>4 potty breaks</p>
      <p>Feeding</p>
      <p>Cozy blanket to sleep on</p>
    </div>

    <div class="col-md-3 offer">
      <h3>Premium Slumber - <span>$45/Night</spn></h3>

      <p>4 potty breaks</p>
      <p>Midday play</p>
      <p>Feeding</p>
      <p>Plush bed to sleep on</p>
      <p>Daily photo updates</p>
    </div>
  </div>

  <div class="row descriptions">
    <div class="col-md-offset-4 col-md-4 offer">
      <h3>Boarding Add-On(s)</h3>

      <p>30 minutes Bark Walk - $15 (Boarding Rate)</p>
      <p>Early Check In/Check Out - $25 (Holiday Pickup - $40)</p>
      <p>Photo Updates - $3/day</p>
      <p>Paw Wax - $3/day</p>
      <p>Administer Medications - $2/day</p>
      <p>Insulin/Steroids Injections - $10/day</p>
      <p>We proudly serve Fromms Gold line dog food - $3/day</p>
      <p><i>*Inquire about additional slumber upgrades*</i><p>
    </div>
  </div>

</section>

@stop

@section('footer')
<!-- Load specific JS  -->
@stop
