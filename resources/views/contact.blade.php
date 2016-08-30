@extends('layout')

@section('head')
@stop

@section('content')

<section id="contact">
  <div class="text">
    <h1>Contact Us!</h1>
  </div>

  <hr />

  <div class="row contact">
    <div class="col-md-6">
      <div class="row">

        <div class="col-md-12">
          <div class="row operating-hours">
            <div class="col-md-12 col-sm-12 cblock">
              <h3 class="header">LOBBY HOURS</h3>
              <br />
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  Monday - Friday
                </div>
                <div class="col-md-offset-2 col-md-4 col-sm-offset-2 col-sm-4">
                  6am-7pm
                </div>
              </div>
              <hr />

              <div class="row">
                <div class="col-md-6 col-sm-6">
                  Saturday
                </div>
                <div class="col-md-offset-2 col-md-4 col-sm-offset-2 col-sm-4">
                  7am-5pm
                </div>
              </div>
              <hr />

              <div class="row">
                <div class="col-md-6 col-sm-6">
                  Sunday
                </div>
                <div class="col-md-offset-2 col-md-4 col-sm-offset-2 col-sm-4">
                  9am-3pm
                </div>
              </div>

              <div class="price-change header">
                Please note we are a 24/7 facility to dog(s).
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-12 cblock">
          <form id="contact-form" action="#">

            <div class="row">
                <div class="col-md-6">
                  <label for="first_name">first name</label>
                  <input type="text" name="first_name" placeholder="John" />
                </div>
                <div class="col-md-6">
                  <label for="last_name">last name</label>
                  <input type="text" name="last_name" placeholder="Doe" />
                </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <label for="email">email <span class="req">*</span></label>
                <input type="email" name="email" placeholder="john.doe@example.com" required />
              </div>
            </div>

            <div class="divider"></div>

            <div class="row">
              <div class="col-md-12">
                <label for="comments">comments</label>
                <textarea cols="46" rows="3" name="comments"></textarea>
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

    </div>

    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <p class="contact-p no-margin">
            We promote a healthy environment to all dogs in our care and want them to
            go home just as healthy. To uphold health, the following vaccinations required are:
          </p>
          <ul class="normal-ul">
            <li>Rabies - 1 and 3 year vaccination is excepted</li>
            <li>DHLPP(Distemper) - 1 and 3 year vaccination is excepted</li>
            <li>Bordetella(Kennel Cough) - 6 month and 1 year vaccination is excepted</li>
          </ul>
          <p class="contact-p">Flea/Tick Preventative is not required but <b>Highly recommended.</b></p>

          <div class="price-chage">
            *Note if fleas are found on pet guests at check-in,
            a mandatory flea bath and flea treatment will be given for $35/additional - regardless of dog size*
          </div>
          <br />
          <img alt="Contact Image" src="//res.cloudinary.com/thebarkinbonesinn/image/upload/v1471804350/contact/happy.jpg" />
          <br />
          <p class="contact-p">
            Unlike other pet care options, come rain or shine, 365 days a year, we always have staff
            here caring for our furry guests in our state-of-the-art, secure facility.
            However, during select holidays we give our front desk staff well-deserved time
            off to be with their families. Therefore, our lobby is closed for the following holidays:
          </p>

          <ul>
            <li>New Year’s Day</li>
            <li>Easter Sunday</li>
            <li>Memorial Day</li>
            <li>4th of July</li>
            <li>Labor Day</li>
            <li>Thanksgiving Day and Black Friday</li>
            <li>Christmas Day</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@stop

@section('footer')
@stop
