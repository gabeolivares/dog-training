@extends('layout')

@section('header')
<!-- Load specific CSS  -->
@stop

@section('content')

<section id="gallery">
    <h1>Gallery Page</h1>
    <div class="container-fluid">
        <div class="row no-gutter" id="gallery-container">
        </div>
    </div>
</section>

<div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <img src="//placehold.it/1200x700/222?text=..." id="galleryImage" class="img-responsive" />
        <p>
            <br/>
            <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
        </p>
      </div>
    </div>
    </div>
</div>
@stop

@section('footer')
<script>
$(document).ready(function() {
  initializeGallery();
});
</script>
@stop
