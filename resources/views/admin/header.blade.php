
<nav class="row navbar-dark">
    <div class="col-lg-12">
        <div class="row text-center">
            <a class="nav-brand p-4" href="#">
                <img src="{{asset('/storage/userimage/'. Auth::user()->user_photo)}}" class="rounded-circle" height="100px" width="100px" alt="Auth Image">
            </a>
            <h6 class="text-center text-warning">{{ strtoupper(Auth::user()->user_first_name)}}<br>{{ strtoupper(Auth::user()->user_last_name)}}</h6>
            <hr class="text-secondary mt-2">
        </div>
        <div class="row">
            <ul class="navbar-nav text-center">
                <li class="nav-item @yield('Dash_active')">
                    <a class="nav-link text-warning-emphasis" href="{{URL::asset('dashboard')}}">
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item" aria-current="true">
                    <a class="nav-link text-warning-emphasis @yield('profile_active')" href="{{URL::asset('profile')}}">
                        profile
                    </a>
                </li>
                <li class="nav-item @yield('Dashboard_active')">
                    <a class="nav-link text-warning-emphasis" href="{{URL::asset('home')}}">
                        Site View
                    </a>
                </li>
                <hr class="text-secondary" style="width: 50%; margin: 0 auto">
                <li class="nav-item @yield('user_active')">
                    <a class="nav-link text-warning-emphasis" href="">
                        <span>User</span>
                    </a>
                </li>
                <li class="nav-item @yield('massage_active')">
                    <a class="nav-link text-warning-emphasis" href="">
                        <span>Massage</span>
                    </a>
                </li>
                <li class="nav-item @yield('massage_active')">
                    <a class="nav-link text-warning-emphasis" href="">
                        <span>Post</span>
                    </a>
                </li>
                <hr class="text-secondary" style="width: 50%; margin: 0 auto">
                <li class="nav-item @yield('service_active') ">
                    <a class="nav-link text-warning-emphasis" href="">
                        <span>service</span>
                    </a>
                </li>
                <li class="nav-item @yield('categories_active')">
                    <a class="nav-link text-warning-emphasis" href="">
                        <span>category</span>
                    </a>
                </li>
                <li class="nav-item @yield('Reservation_active') ">
                    <a class="nav-link text-warning-emphasis" href="">
                        <span>reservation</span>
                    </a>
                </li>
                <div class="mt-5">
                    <hr class="text-secondary mt-5" style="width: 50%; margin: 0 auto">
                    <li class="nav-item">
                        <a class="nav-link text-warning-emphasis" href="/">
                            Log Out
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>
