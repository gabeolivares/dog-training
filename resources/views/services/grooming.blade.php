@extends('layout')

@section('head')
<link rel="stylesheet" href="/css/services.css">
@stop

@section('content')

<section>
  <div class="text">
    <h1>Grooming</h1>

    <p>
      All grooming is based off coat/nail/ear conditions- Up-charges may apply.
    </p>
  </div>

  <hr />

  <div id="grooming" class="banner">
    <img src="//res.cloudinary.com/thebarkinbonesinn/image/upload/v1471305967/services/grooming.jpg" />
  </div>

  <hr />

  <h3>Packages</h3>
  <div class="row descriptions">
    <div class="col-md-4">
      <h4>Organic Rinse</h4>
      <p>Basic wash($12-$18 depending on length of coat)</p>
    </div>

    <div class="col-md-4">
      <h4>Deluxe Spa Package</h4>
      <p>
        Homemade shampoo scrub, 10minute homemade condition set, ear cleaning,
        nail grind, blow dry, deshed, soft brush, and nose and paw moisturizer($45-$60 based of coat length)
      </p>
    </div>

    <div class="col-md-4">
      <h4>Basic Spa Package</h4>
      <p>Homemade shampoo scrub, blow dry, &amp; brush ($25-$35 based of coat length)</p>
    </div>
  </div>

  <hr />

  <h3>Stand Alone Services</h3>
  <div class="row descriptions">
    <div class="col-md-6">
      <h4>Dry Brushing</h4>
      <p>$10( deep brushing without bath) for dogs needing extra brushing this can be added to spa package</p>
    </div>

    <div class="col-md-6">
      <h4>Wrinkle Maintenance</h4>
      <p>$5 wipe facial/body wrinkles tailor for bulldogs, Boston terriers, pugs, sharpei's, mastiffs, boxers, etc</p>
    </div>
  </div>
  <div class="row descriptions">
    <div class="col-md-4">
      <h4>Ear &amp; Paw</h4>
      <p>$20</p>
    </div>

    <div class="col-md-4">
      <h4>Nail Grind</h4>
      <p>$15(up-charge for longer nails)</p>
    </div>

    <div class="col-md-4">
      <h4>Ear Cleaning</h4>
      <p>$6-$12</p>
    </div>
  </div>

</section>

@stop

@section('footer')
<!-- Load specific JS  -->
@stop
