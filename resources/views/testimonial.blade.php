@extends('layouts.pages')

@push('title')
Testimonials
@endpush

@section('content')

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

 @include('includes.testimonials')
 
 @include('includes.testimonials')

</div>
</div>
</div>


@endsection
