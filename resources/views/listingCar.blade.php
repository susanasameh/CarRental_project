@extends('layouts.pages')

@push('title')
Listings
@endpush

@section('content')

<div class="site-section bg-light">

@include('includes.carListings')

<div class="row">
    <div class="col-5">
      <div class="custom-pagination">
        <a href="#">1</a>
        <span>2</span>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
      </div>
    </div>
  </div>
</div>
</div>


<div class="site-section">
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

@endsection
