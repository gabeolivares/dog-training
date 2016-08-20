@extends('layout')

@section('head')
<link rel="stylesheet" href="/css/services.css">
@stop

@section('content')

<section>
  <div class="text">
    <h1>Exclusive Services</h1>

    <p>
      Doggy Day Care(Cage-free) we are trained professionals, midday potty breaks/exercise,
      midday medications drop-ins, dogs are monitored 24/7
    </p>
  </div>

  <hr />

  <div id="exclusive" class="banner">
    <img src="//res.cloudinary.com/thebarkinbonesinn/image/upload/c_scale,w_1920/v1471329664/services/exclusive.jpg" />
  </div>

  <hr />

  <div class="row descriptions">
    <div class="col-md-4 offer">
      <h3>BizzyBone</h3>
      <p>
        Offering exclusive snacks during the day to keep dogs happy and mentally stimulated.
        Choose from homemade frozen Peanut Butter yogurt, Pumpkin yogurt, or pupball(turkey &amp; carrots)

      </p>

      <div class="rate">
        <span>Rate:</span>

        <ul><li>$5</li></ul>
      </div>
    </div>

    <div class="col-md-4 offer">
      <h3>Barkin' Voyage</h3>
      <p>
        We offer an exclusive off leash day hike in approved areas around Austin.
        Dogs must be approved for this event and must be slumbering with us. Barkin' Voyages.
        Voyages last 3-5 hours.
      </p>

      <div class="rate">
        <span>Rate:</span>
        <ul>
          <li>Starts @ $25/voyage</li>
        </ul>
      </div>
    </div>

    <div class="col-md-4 offer">
      <h3>30 minutes Bark Walk</h3>
      <p>
        Designed specifically for dogs needing just a little more alone time with the Inn team.
        30 minutes walks are private walks through out the facility. Fresh water will be given throughout the walk.
      </p>

      <div class="rate">
        <span>Rate:</span>

        <ul><li>$25</li></ul>
      </div>
    </div>
  </div>

  <div class="row descriptions">
    <div class="col-md-offset-2 col-md-4 offer">
      <h3>Midday Pawty Breaks</h3>
      <p>
        Work a long day? Unable to get home right after work to let your pup our for potty breaks and exercise?
        We offer 30 minute midday drop ins for your pet to go potty, exercise, get afternoon feeding and/or medication, and more.
      </p>

      <div class="rate">
        <span>Rate:</span>
        <ul>
          <li>Hutto/Round Rock/Georgetown $20/visit</li>
          <li>Austin/Cedar Park/Leander $25/visit</li>
        </ul>

        <i style="font-size:15px">*Ask about out monthly discounts*</i>
      </div>
    </div>

    <div class="col-md-4 offer">
      <h3>Pet Taxi</h3>
      <p>
        The safest, most minimal str ess, and convenient way to get your dog to the 6 acre Resort.
        We offer flexible commutes when pet guest come for daycare, grooming, training, and boarding.
      </p>

      <div class="rate">
        <span>Rate:</span>
        <ul>
          <li>Hutto/Georgetown $5</li>
          <li>Round Rock $10 </li>
          <li>Austin $20 </li>
          <li>Cedar Park/Leander $15</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="price-change">*Prices are subject to change without notice*</div>
</section>

@stop

@section('footer')
<!-- Load specific JS  -->
@stop
