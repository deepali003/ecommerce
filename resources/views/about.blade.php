@extends('layouts.main')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-3 bread">About Us</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 order-md-last d-md-flex align-items-stretch">
        {{-- <div class="img w-100 img-2 mr-md-2" style="background-image: url(images/about.jpg);"></div> --}}
        <div class="img w-100 img-2 img-overlay ml-md-2 p-4" style="background-image: url(images/about-2.jpg);">
          <div class="request-quote py-5">
            <div class="py-2">
              <span class="subheading">Be Part of our Business</span>
              <h3>Request A Quote</h3>
            </div>
            <form action="#" class="request-form ftco-animate">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="First Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Last Name">
              </div>
              <div class="form-group">
                <div class="form-field">
                  <div class="select-wrap">
                    <div class="icon-arr"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control">
                      <option value="">Select Your Services</option>
                      <option value="">Construction</option>
                      <option value="">Renovation</option>
                      <option value="">Interior Design</option>
                      <option value="">Exterior Design</option>
                      <option value="">Painting</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Phone">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-7 wrap-about py-md-5 ftco-animate">
        <div class="heading-section pr-md-5">
          <h2 class="mb-4">E-Commerce</h2>

          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section testimony-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Testimonial</span>
        <h2 class="mb-3">Happy Clients</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="text">
                <span class="fa fa-quote-left"></span>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                  <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="text">
                <span class="fa fa-quote-left"></span>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                  <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="text">
                <span class="fa fa-quote-left"></span>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                  <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="text">
                <span class="fa fa-quote-left"></span>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                  <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="text">
                <span class="fa fa-quote-left"></span>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                  <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection