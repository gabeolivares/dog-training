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
    <img src="//res.cloudinary.com/thebarkinbonesinn/image/upload/c_crop,h_1280,w_1920,x_2082,y_1314/v1471306982/services/boarding.jpg" />
  </div>

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

</section>

@stop

@section('footer')
<!-- Load specific JS  -->
@stop
