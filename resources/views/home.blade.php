@extends('layout')

@section('head')
<!-- Load specific CSS  -->
@stop

@section('content')
<header id="first">
  <div class="header-content">
      <div class="inner">
          <h1 class="cursive">The Barkin' Bones Inn</h1>
          <h4>It's a dogs world, make it fun!</h4>
          <hr class="main-hr" />
          <!-- <a href="#video-background" id="toggleVideo" data-toggle="collapse" class="btn btn-primary btn-xl">Toggle Video</a> &nbsp; <a href="#one" class="btn btn-primary btn-xl page-scroll">Get Started</a> -->
      </div>
  </div>
  <video autoplay="" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg" id="video-background">
      <source src="//res.cloudinary.com/thebarkinbonesinn/video/upload/ac_none/a_90/v1471667466/thebarkinbonesinn.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
  </video>
</header>

<section id="homeReviews">
  <h1>Customer Reviews</h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      @foreach($reviews as $idx => $review)
        <li data-target="#myCarousel" data-slide-to="{{ $idx }}" class="{{ ($idx == 0 ? 'active' : '') }}"></li>
      @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php $idx = 0 ;?>
      @foreach($reviews as $review)
      <div class="item {{ ($idx === 0 ? 'active' : '') }}">
        <div class="carousel-caption">
          <h3>{{ $review->fullName }}</h3>
          <p>{{ $review->message }}</p>
          <fieldset class="rating">
            <input type="radio" name="rating" value="5" {{ ($review->rating == 5 ? 'checked' : '') }}/><label for="star5" title="Rocks!">5 stars</label>
            <input type="radio" name="rating" value="4" {{ ($review->rating == 4 ? 'checked' : '') }}/><label for="star4" title="Pretty good">4 stars</label>
            <input type="radio" name="rating" value="3" {{ ($review->rating == 3 ? 'checked' : '') }}/><label for="star3" title="Meh">3 stars</label>
            <input type="radio" name="rating" value="2" {{ ($review->rating == 2 ? 'checked' : '') }}/><label for="star2" title="Kinda bad">2 stars</label>
            <input type="radio" name="rating" value="1" {{ ($review->rating == 1 ? 'checked' : '') }}/><label for="star1" title="Sucks big time">1 star</label>
          </fieldset>
          <br />
        </div>
      </div>
      <?php $idx = 1 ;?>
      @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

@stop

@section('footer')
<!-- Load specific JS  -->
@stop
