@extends('layouts.adminTablePages')
   @section('title')
   Show Team
   @endsection



        <!-- page content -->
        @section('content')

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manage Team</h3>
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

                  <h2>Pick Upe : {{$trip->pickUp}}</h2>
                 <br>
                  <h2>Drop Off: {{$trip->dropOff}}</h2>
                   <br>
                  <h2>Type Of Car : {{$trip->category->categoryName}}</h2>
                  <br>
                  
                   
                  
                </div>

              </div>
            </div>
          </div>
        </div>
        @endsection
        <!-- /page content -->

       