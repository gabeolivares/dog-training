@extends('layout')

@section('head')
@stop

@section('content')
<section id="submit-reviews">
  <h1>Submit Reviews</h1>
  <div class="row">
    <div class="col-md-6 col-md-offset-3 cblock">
      <form id="review-form" action="#">

        <div class="row">
            <div class="col-md-12">
              <label for="full_name">Full Name</label>
              <input type="text" name="full_name" required placeholder="John Doe" />
            </div>
        </div>

        <div class="divider"></div>

        <div class="row">
          <div class="col-md-12">
            <label for="message">Message</label>
            <textarea cols="46" rows="3" required name="message"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <label for="ratings">Rating:</label>
            <fieldset id="ratings" class="rating">
              <input type="radio" id="star5" name="rating" value="5"/><label for="star5" class="rating-label" title="Rocks!">5 stars</label>
              <input type="radio" id="star4" name="rating" value="4"/><label for="star4" class="rating-label" title="Pretty good">4 stars</label>
              <input type="radio" id="star3" name="rating" value="3"/><label for="star3" class="rating-label" title="Meh">3 stars</label>
              <input type="radio" id="star2" name="rating" value="2"/><label for="star2" class="rating-label" title="Kinda bad">2 stars</label>
              <input type="radio" id="star1" name="rating" value="1"/><label for="star1" class="rating-label" title="Sucks big time">1 star</label>
            </fieldset>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <input class="btn btn-submit contact-btn" type="submit" value="Submit" />
          </div>
        </div>
      </form>
    </div>
  </div>

</section>
@stop

@section('footer')
@stop
