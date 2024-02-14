

<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
        <ul class=" navbar-right">
          <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
              <img src="{{asset('assets/admin/images/img.jpg')}}" alt="">{{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item"  href="javascript:;"> Profile</a>
                <a class="dropdown-item"  href="javascript:;">
                  <span class="badge bg-red pull-right">50%</span>
                  <span>Settings</span>
                </a>
            <a class="dropdown-item"  href="javascript:;">Help</a>
              {{-- <a class="dropdown-item"  href="{{route('login')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a> --}}
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
           </a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
           </form>
            </div>
          </li>

          <li role="presentation" class="nav-item dropdown open">
            <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-green">{{$unreadMessage}}</span>
            </a>
            <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">

                @foreach ($unreadContacts as $contact )
                {{-- @if (!$contacts->unreadMessage) --}}

              <li class="nav-item">
                <a class="dropdown-item"  href="{{route('showMessage',$contact->id)}}">
                  <span class="image"><img src="{{asset('assets/admin/images/img.jpg')}}" alt="Profile Image" /></span>
                  <span>
                    <span>{{ $contact->firstName }} {{ $contact->lastName }}</span>
                    <?php

                    //use Carbon::now to retrieve the current date and time in various contexts
                    //change the time format
                                    $minute = $contact->created_at->diffInMinutes(\Carbon\Carbon::now());
                                    $hour = $contact->created_at->diffInHours(\Carbon\Carbon::now());
                                    $day = $contact->created_at->diffInDays(\Carbon\Carbon::now());
                                    // less than one hour
                                    if($minute < 60){
                                        if($minute == 1){
                                            $minute = $minute . " Minute Ago";
                                        }else{
                                          $minute = $minute . " Minutes Ago";
                                        }
                                    }// less than one day
                                    elseif($minute > 60 && $minute < 1440){    //24h*60m=1440min per one day
                                        if($hour == 1){
                                          $minute = $hour . " Hour Ago";
                                        }else{
                                          $minute = $hour . " Hours Ago";
                                        }
                                    }// in days
                                    else{
                                        if($day == 1){
                                          $minute = $day . " Day Ago";
                                        }else{
                                          $minute = $day . " Days Ago";
                                        }
                                    }
                                ?>
                                
                                <span class="time">{{ $minute }}</span>
                    {{-- <span class="time">{{$contact->created_at}}</span> --}}
                  </span>
                  <span class="message">
                    {{$contact->message}}
                  </span>
                </a>
              </li>
              {{-- @endif --}}
              @endforeach

              <li class="nav-item">
                <div class="text-center">
                  <a class="dropdown-item" href="{{route('messageTable')}}">
                    <strong>See All Alerts</strong>
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
