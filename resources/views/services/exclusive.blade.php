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

    <div class="col-md-3 offer">
      <h4>Pet Taxi</h4>
      <p>
        The safest, most minimal str ess, and convenient way to get your dog to the 6 acre Resort.
        We offer flexible commutes when pet guest come for daycare, grooming, training, and boarding.
        <ul>
          <li>Hutto/Georgetown $5</li>
          <li>Round Rock $10 </li>
          <li>Austin $20 </li>
          <li>Cedar Park/Leander $15</li>
        </ul>
      </p>
    </div>

    <div class="col-md-3 offer">
      <h4>BizzyBone</h4>
      <p>
        Offering exclusive snacks during the day to keep dogs happy and mentally stimulated.
        Choose from homemade frozen Peanut Butter yogurt, Pumpkin yogurt, or pupball(turkey &amp; carrots)
        $5
      </p>
    </div>

    <div class="col-md-3 offer">
      <h4>30 minutes Bark Walk</h4>
      <p>
        Designed specifically for dogs needing just a little more alone time with the Inn team.
        30 minutes walks are private walks through out the facility. Fresh water will be given throughout the walk.
        $15
      </p>
    </div>

    <div class="col-md-3 offer">
      <h4>Midday Pawty Breaks</h4>
      <p>
        Work a long day? Unable to get home right after work to let your pup our for potty breaks and exercise?
        We offer 30 minute midday drop ins for your pet to go potty, exercise, get afternoon feeding and/or medication, and more.
        Hutto/Round Rock/Georgetown $20/visit
        Austin/Cedar Park/Leander $25/visit

        <i>*Ask about out monthly discounts*</i>
      </p>
    </div>
  </div>

</section>

@stop

@section('footer')
<!-- Load specific JS  -->
@stop
