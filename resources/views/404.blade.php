<!doctype html>
<html lang="en">

  <head>
    @push('title')
    404
    @endpush
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

        {{-- @push('title')
      404
      @endpush --}}
         @include('includes.heroInnerPage')
      </div>

     <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page?</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('index') }}">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->

    <footer class="site-footer">
        @include('includes.footer')
              </footer>

            </div>

           @include('includes.footerjs')
          </body>

        </html>
