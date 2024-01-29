<div class="container">
    <div class="row align-items-center position-relative">

      <div class="col-3">
        <div class="site-logo">
          <a href="{{route('index')}}"><strong>CarRental</strong></a>
        </div>
      </div>

      <div class="col-9  text-right">

        <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
          <ul class="site-menu main-menu js-clone-nav ml-auto ">
            <li><a href="{{route('index')}}" class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{route('listingCar')}}" class="nav-link {{ request()->routeIs('listingCar') ? 'active' : '' }}">Listing</a></li>
            <li><a href="{{route('testimonial')}}" class="nav-link {{ request()->routeIs('testimonial') ? 'active' : '' }}">Testimonials</a></li>
            <li><a href="{{route('blog')}}" class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a></li>
            <li><a href="{{route('about')}}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
            <li><a href="{{route('contact')}}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
          </ul>
        </nav>
      </div>


    </div>
  </div>
