
  {{-- <div class="col-lg-4 mb-4 mb-lg-0">
    <div class="testimonial-2">
      <blockquote class="mb-4">
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
      </blockquote>
      <div class="d-flex v-card align-items-center">
        <img src="{{asset('assets/images/person_1.jpg')}}" alt="Image" class="img-fluid mr-3">
        <div class="author-name">
          <span class="d-block">Mike Fisher</span>
          <span>Owner, Ford</span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-4 mb-lg-0">
    <div class="testimonial-2">
      <blockquote class="mb-4">
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
      </blockquote>
      <div class="d-flex v-card align-items-center">
        <img src="{{asset('assets/images/person_2.jpg')}}" alt="Image" class="img-fluid mr-3">
        <div class="author-name">
          <span class="d-block">Jean Stanley</span>
          <span>Traveler</span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-4 mb-lg-0">
    <div class="testimonial-2">
      <blockquote class="mb-4">
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
      </blockquote>
      <div class="d-flex v-card align-items-center">
        <img src="{{asset('assets/images/person_3.jpg')}}" alt="Image" class="img-fluid mr-3">
        <div class="author-name">
          <span class="d-block">Katie Rose</span>
          <span >Customer</span>
        </div>
      </div>
    </div>
  </div> --}}
{{-- @foreach ($testimonial as $testimonials)
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
@endforeach --}}


<div class="row">
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
  </div>
