<!doctype html>
<html lang="en">

  <head>
   @include('includes.head')
  </head>

  <body>


    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        @include('includes.header')

      </header>


      <div class="hero" style="background-image: url('{{asset('assets/images/hero_1_a.jpg')}}');">

        @include('includes.hero')

      </div>



      <div class="site-section">
       @include('includes.howItWorks')
      </div>




    <div class="site-section bg-light">
      @include('includes.carListings')
    </div>
    </div>

    <div class="site-section">
      @include('includes.features')
    </div>

    <div class="site-section bg-light">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <h2 class="section-heading"><strong>Testimonials</strong></h2>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="row">

     @include('includes.testimonials')

    </div>
    </div>
    </div>

    <div class="site-section bg-primary py-5">
      @include('includes.whatAreYouWaitingFor')
    </div>


      <footer class="site-footer">
@include('includes.footer')
      </footer>

    </div>

   @include('includes.footerjs')
  </body>

</html>

