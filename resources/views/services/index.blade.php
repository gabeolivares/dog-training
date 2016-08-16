@extends('layout')

@section('head')
<link rel="stylesheet" href="/css/services.css">
@stop

@section('content')

<section>
  <!-- <div class="banner">
    <img src="//res.cloudinary.com/thebarkinbonesinn/image/upload/a_auto_right/v1470973714/services/banner.jpg" />
  </div> -->

  <div class="text">
    <h1>Services</h1>
    <p>
      We, The Barkin' Bones Inn &amp; Dog Resort, are a spacious 6 acre stress-free dog resort located in peaceful Hutto, Tx.
      We offer a luxurious, entertaining, stress-free, affordable, sanitary environment to dogs of all ages, temperaments, sizes, and breeds.
    </p>
  </div>

  <hr />

  <div class="services">
    <div class="row">
      <a href="/services/boarding" class="col-sm-12 col-md-6 service">
        <img src="//res.cloudinary.com/thebarkinbonesinn/image/upload/c_crop,h_1280,w_1920,x_2082,y_1314/v1471306982/services/boarding.jpg" />

        <h3>Dog Boarding</h3>
      </a>

      <a href="/services/grooming" class="col-sm-12 col-md-6 service">
        <img src="//res.cloudinary.com/thebarkinbonesinn/image/upload/v1471305967/services/grooming.jpg" />

        <h3>Grooming</h3>
      </a>


    </div>

    <br />

    <div class="row">
      <a href="/services/training" class="col-sm-12 col-md-6 service" href="/services/training">
        <img src="//res.cloudinary.com/thebarkinbonesinn/image/upload/c_crop,e_improve,h_1280,w_1920/v1471305894/services/training.jpg" />

        <h3>Training</h3>
      </a>

      <a href="/services/exclusive" class="col-sm-12 col-md-6 service">
        <img src="//res.cloudinary.com/thebarkinbonesinn/image/upload/c_crop,e_improve,h_1280,w_1920/v1471305894/services/training.jpg" />

        <h3>Exclusive Services</h3>
      </a>
    </div>
  </div>
</section>

@stop

@section('footer')
<!-- Load specific JS  -->
@stop
