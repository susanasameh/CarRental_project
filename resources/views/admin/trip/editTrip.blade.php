@extends('layouts.adminFormPages')
@section('title')
Rent Car Admin | Edit Trips
@endsection

			<!-- page content -->
            @section('content')
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Manage Trips</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Add Trip</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									{{-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"action="{{route('updateTrip',$trip->id)}}"  method="post" enctype="multipart/form-data">
                                        --}}
                                        <form class="trip-form" action="{{route('updateTrip',$trip->id)}}"  method="post">
                                         @csrf
                                        @method('put')
                                            <div class="row align-items-center">
                                  
                                              <div class="mb-3 mb-md-0 col-md-3">
                                                <select name="category_id" id="" class="custom-select form-control">
                                                  <option value="">Select Type</option>
                                                  @foreach ($category as $categories)
                                        <option value="{{$categories->id}}" @selected(old('category_id',$trip->category_id) == $categories->id)>{{$categories->categoryName}}</option>
                                        
                                        @error('category_id')
                                        {{ $message }}
                                          @enderror
                                          @endforeach
                                                </select>
                                              </div>
                                              <div class="mb-3 mb-md-0 col-md-3">
                                                <div class="form-control-wrap">
                                                  <input type="date" id="cf-3" name="pickUp" placeholder="Pick up" class="form-control datepicker px-3" value="{{$trip->pickUp}}">
                                                  @error('pickUp')
                                                  {{ $message }}
                                              @enderror
                                                  <span class="icon icon-date_range"></span>
                                  
                                                </div>
                                              </div>
                                              <div class="mb-3 mb-md-0 col-md-3">
                                                <div class="form-control-wrap">
                                                  <input type="date" id="cf-4" name="dropOff" placeholder="Drop off" class="form-control datepicker px-3" value="{{$trip->dropOff}}">
                                                  @error('dropOff')
                                                  {{ $message }}
                                              @enderror
                                                  <span class="icon icon-date_range"></span>
                                                </div>
                                              </div>
                                              <div class="mb-3 mb-md-0 col-md-3">
                                                <input type="submit" value="Update The Trip" class="btn btn-primary btn-block py-3">
												<input type="submit" value="Cancel" class="btn btn-primary btn-block py-3" onclick="window.location.href='{{route('tripTable')}}'">
                                              </div>
                                            </div>
                                  
                                          </form>
                                  
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
            @endsection
			<!-- /page content -->

