@extends('layout')

@section('head')
<link rel="stylesheet" href="/css/services.css">
@stop

@section('content')

<section>
  <div class="banner">
    <img src="//res.cloudinary.com/thebarkinbonesinn/image/upload/a_auto_right/v1470973714/services/banner.jpg" />
  </div>

  <div class="text">
    <h1>Training Page</h1>
  </div>

  <div class="services">
    <div class="row">
      <a href="/services/boarding" class="col-sm-12 col-md-4 service">
        <img src="//pixabay.com/static/img/no_hotlinking.png" />

        <h3>Dog Boarding</h3>
      </a>

      <a href="/services/grooming" class="col-sm-12 col-md-4 service">
        <img src="//pixabay.com/static/img/no_hotlinking.png" />

        <h3>Grooming</h3>
      </a>

      <a href="/services/training" class="col-sm-12 col-md-4 service" href="/services/training">
        <img src="//pixabay.com/static/img/no_hotlinking.png" />

        <h3>Training</h3>
      </a>
    </div>

    <br />

    <div class="row">
      <a href="/services/exclusive" class="col-sm-12 col-md-4 service">
        <img src="//pixabay.com/static/img/no_hotlinking.png" />

        <h3>Exclusive Services</h3>
      </a>
    </div>
  </div>
</section>

@stop

@section('footer')
<!-- Load specific JS  -->
@stop
