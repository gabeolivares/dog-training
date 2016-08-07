@extends('layout')

@section('head')
<!-- Load specific CSS  -->
@stop

@section('content')
<header id="first">
  <div class="header-content">
      <div class="inner">
          <h1 class="cursive">The Barkin' Bones Inn</h1>
          <h4>A happy place for your best friend</h4>
          <hr>
          <a href="#video-background" id="toggleVideo" data-toggle="collapse" class="btn btn-primary btn-xl">Toggle Video</a> &nbsp; <a href="#one" class="btn btn-primary btn-xl page-scroll">Get Started</a>
      </div>
  </div>
  <video autoplay="" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg" id="video-background">
      <source src="http://video.wixstatic.com/video/11062b_dadf974a47664e5cb42f939b7f17bec8/1080p/mp4/file.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
  </video>
</header>

<h1>Home Page</h1>

@stop

@section('footer')
<!-- Load specific JS  -->
@stop
