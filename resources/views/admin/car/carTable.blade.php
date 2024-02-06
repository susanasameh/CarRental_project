@extends('layouts.adminTablePages')
@section('title')
Meetings
@endsection

@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Manage Cars</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
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
              <h2>List of Cars</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>

                    <tr>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Active</th>
                    <th>Content</th>
                    <th>Luggage</th>
                    <th>Doors</th>
                    <th>Passengers</th>
                    <th>Image</th>
                    <th>Category_id</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>


                <tbody>
                    @foreach ($car as $cars)

                  <tr>
                    <td>{{$cars->title}}</td>
                    <td>{{$cars->price}}</td>
                    <td> @if($cars->active)
                        Yes
                    @else
                        No
                    @endif</td>
                    <td>{{$cars->content}}</td>
                    <td>{{$cars->luggage}}</td>
                    <td>{{$cars->doors}}</td>
                    <td>{{$cars->passengers}}</td>
                    <td><img src="{{ asset('assets/images/'.$cars->image)}}" alt="Testimonial" style="width:150px;height:150px;"></td>
                    <td>{{$cars->category_id}}</td>

                    <td><a href="editCar/{{$cars->id}}"><img src="{{asset('assets/admin/images/edit.png')}}" alt="Edit"></td>
                        <td><a href="deleteCar/{{$cars->id}}"><img src="{{asset('assets/admin/images/delete.png')}}" alt="Delete"></a></td>
                  </tr>

                   @endforeach
                </tbody>
              </table>
            </div>
            </div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
