<div class="container">
    <div class="row">
      <div class="col-lg-7">
        <h2 class="section-heading"><strong>Car Listings</strong></h2>
        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
    </div>


    <div class="row">@foreach ($car as $cars)
      <div class="col-md-6 col-lg-4 mb-4">

        <div class="listing d-block  align-items-stretch">

          <div class="listing-img h-100 mr-4">
            <a href="{{route('single', $cars->id)}}">
            <img src="{{asset('assets/images/'.$cars->image)}}" alt="Image" class="img-fluid">
          </div>
          <div class="listing-contents h-100">
            <h3>{{$cars->title}}</h3>
            <div class="rent-price">
              <strong>{{$cars->price}}</strong><span class="mx-1">/</span>day
            </div>
            <div class="d-block d-md-flex mb-3 border-bottom pb-3">
              <div class="listing-feature pr-4">
                <span class="caption">Luggage:</span>
                <span class="number">{{$cars->luggage}}</span>
              </div>
              <div class="listing-feature pr-4">
                <span class="caption">Doors:</span>
                <span class="number">{{$cars->doors}}</span>
              </div>
              <div class="listing-feature pr-4">
                <span class="caption">Passenger:</span>
                <span class="number">{{$cars->passengers}}</span>
              </div>
            </div>
            <div>
              <p>{{$cars->content}}</p>
              <p><a href="{{route('single', $cars->id)}}" class="btn btn-primary btn-sm">Rent Now</a></p>
            </div>
          </div>

        </div>


      </div>
@endforeach


    </div>
    <!-- Pagination -->
    {{-- {{$car->links()}} --}}
  {{-- </div> --}}
