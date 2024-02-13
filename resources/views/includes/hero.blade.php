<div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-10">

        <div class="row mb-5">
          <div class="col-lg-7 intro">
            <h1><strong>Rent a car</strong> is within your finger tips.</h1>
          </div>
        </div>

        <form class="trip-form" action="{{route('storeTrip')}}"  method="post">
          @csrf

          <div class="row align-items-center">
            

            <div class="mb-3 mb-md-0 col-md-3">
              <h6>Type of Car</h6>
              <select name="category_id" id="" class="custom-select form-control">
                
                <option value="">Select Type</option>
                @foreach ($category as $categories)
                
                <option value="{{ $categories->id }}">{{ $categories->categoryName }}</option>
                  
                @error('category_id')
                {{ $message }}
                  @enderror
                {{-- <option value="{{ $categories->id }}" @selected(old('category_id') == $categories->id)>{{ $categories->categoryName }}</option> --}}
                {{-- <option value="">Toyota</option>
                <option value="">Ford</option>
                <option value="">Lamborghini</option> --}}
                @endforeach
                
              </select>
            </div>
            <div class="mb-3 mb-md-0 col-md-3">
              <div class="form-control-wrap">
                <h6>Pick Up</h6>
                <input type="date" id="cf-3" name="pickUp" placeholder="Pick up" class="form-control" value="{{old('pickUp')}}">
                @error('pickUp')
                {{ $message }}
            @enderror
                {{-- <span class="icon icon-date_range"></span> --}}

              </div>
            </div>
            <div class="mb-3 mb-md-0 col-md-3">
              <div class="form-control-wrap">
                <h6>Drop Off</h6>
                <input type="date" id="cf-4" name="dropOff" placeholder="Drop off" class="form-control px-3" value="{{old('dropOff')}}">
                @error('dropOff')
                {{ $message }}
            @enderror
                {{-- <span class="icon icon-date_range"></span> --}}
              </div>
            </div>
            <div class="mb-3 mb-md-0 col-md-3">
              <input type="submit" value="Search Now" class="btn btn-primary btn-block py-3" onclick="alert('wish to have an amazing TRIP')">
              {{-- <button type="submit" value="" class="btn btn-primary btn-block py-3">Search Now</button> --}}
              {{-- <div class="row align-items-center justify-content-center">
                <div class="mt-3"> --}}
                to delete or change your trip? <a href="{{route('contact')}}">Contact Us</a>
                {{-- </div>
              </div> --}}
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
