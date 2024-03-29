<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('userTable')}}">Users List</a></li>
                    <li><a href="{{route('addUser')}}">Add User</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Categories <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('addCategory')}}">Add Category</a></li>
                    <li><a href="{{route('categoryTable')}}">Categories List</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> Cars <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('addCar')}}">Add Car</a></li>
                    <li><a href="{{route('carTable')}}">Cars List</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> Testimonials <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('addTestimonial')}}">Add Testimonials</a></li>
                    <li><a href="{{route('testimonialTable')}}">Testimonials List</a></li>
                </ul>
            </li>
           <li><a><i class="fa fa-desktop"></i> Messages <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('messageTable')}}">Messages</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> Team <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('addTeam')}}">Add Team</a></li>
                    <li><a href="{{route('teamTable')}}">Team List</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> Trips <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('tripTable')}}">Trips List</a></li>
                </ul>
            </li>
        </ul>
    </div>

</div>
