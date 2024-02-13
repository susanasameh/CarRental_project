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

 {{-- @include('includes.testimonials')
 
 @include('includes.testimonials') --}}

</div>

{{-- <div class="row">
  @foreach ($testimonial as $testimonials)
  <div class="col-lg-4 mb-4">
    <div class="testimonial-2">
      <blockquote class="mb-4">
        <p>"{{$testimonials->content}}"</p>
      </blockquote>
      <div class="d-flex v-card align-items-center">
        <img src="{{asset('assets/images/'.$testimonials->image)}}" alt="Image" class="img-fluid mr-3">
        <div class="author-name">
          <span class="d-block">{{$testimonials->name}}</span>
          <span>{{$testimonials->position}}</span>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  </div> --}}
</div>
</div>


@endsection
