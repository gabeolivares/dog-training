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
    <div class="col-md-6">
      <h4>Basic Slumber</h4>
      <p>$35/night includes 4 potty breaks, feeding, and a cozy blanket to sleep on</p>
    </div>

    <div class="col-md-6">
      <h4>Deluxe Slumber</h4>
      <p>$45/night includes 4 potty breaks, Midday play, feeding, and a plush bed to sleep on, includes daily photo updates</p>
    </div>
  </div>

  <div class="row descriptions">
    <div class="col-md-12">
      <h4>Boarding Add-On(s)</h4>
      <p>30 minutes Bark Walk- $15(boarding rate)</p>
      <p>Early Check In/Check Out $25 Holiday Pickup is $40</p>
      <p>Photo Updates $3/day</p>
      <p>Paw Wax $3/day</p>
      <p>Administer Medications($2/day) Insulin/steroids injections $10/day</p>
      <p>We proudly serve Fromms Gold line dog food $3/day</p>
      <p><i>*Inquire about additional slumber upgrades*</i><p>
    </div>
  </div>

</section>

@stop

@section('footer')
<!-- Load specific JS  -->
@stop
