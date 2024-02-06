<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
        <ul class=" navbar-right">
          <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
              <img src="{{asset('assets/admin/images/img.jpg')}}" alt="">
              {{-- @foreach ($user as $users){{$users->name}} @endforeach --}}
              {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item"  href="javascript:;"> Profile</a>
                <a class="dropdown-item"  href="javascript:;">
                  <span class="badge bg-red pull-right">50%</span>
                  <span>Settings</span>
                </a>
            <a class="dropdown-item"  href="javascript:;">Help</a>
              <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
            </div>
          </li>

          <li role="presentation" class="nav-item dropdown open">
            <a href="javascript:{{route('unreadMessage')}};" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-green">{{$unreadMessage}}</span>
              </a>
            <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
               
              <li class="nav-item">
                @foreach ($contact as $contacts)
                {{-- @if (is_object($contacts) && property_exists($contacts, 'firstName')) --}}
                @if (!$contacts->unreadMessage)





                <a class="dropdown-item" href="{{route('unreadMessage')}}">
                  <span class="image"><img src="{{asset('assets/admin/images/img.jpg')}}" alt="Profile Image" /></span>
                  <span>
                    {{-- @if (is_object($contacts) && property_exists($contacts, 'firstName')) --}}
                    <span>{{$contacts->firstName . " " . $contacts->lastName ?? 'None'}}</span>
                    {{-- @else
    <p>Error: Unable to display full name.</p>
@endif --}}
{{-- @endif --}}
                    <span class="time">{{$contacts->created_at}}</span>
                    {{-- @if (is_object($messages) && property_exists($messages, 'created_at'))
    <span class="time">{{$messages->created_at}}</span>
@else
    <span class="time">-</span> @endif --}}
                  </span>
                  <span class="message">
                    {{$contacts->message}}
                  </span>
                  {{-- @if (is_object($messages) && property_exists($messages, 'message'))
    <span class="message">{{$messages->message}}</span>
@else
    <p>Error: Unable to display message.</p>
@endif --}}
                </a>
                @endif
                @endforeach
              </li>

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
