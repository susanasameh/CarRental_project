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

      <div class="hero inner-page" style="background-image: url('assets/images/hero_1_a.jpg');">
         @include('includes.heroInnerPage')
      </div>

      @yield('content')

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


