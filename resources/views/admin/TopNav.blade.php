<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{asset('storage/userimage/'. Auth::user()->user_photo)}}" class="rounded-circle" height="40rem" width="40rem" alt="Auth Image">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if (Auth::user()->userttype === 'ADM')
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  text-warning-emphasis" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Admin
                    </a>
                    <ul class="dropdown-menu text-center">
                        <li class="nav-item" aria-current="true">
                            <a class="nav-link text-warning-emphasis @yield('profile_active')" href="{{URL::asset('profile')}}">
                                profile
                            </a>
                        </li>
                        <li class="nav-item @yield('Dash_active')">
                            <a class="nav-link text-warning-emphasis" href="{{URL::asset('dashboard')}}">
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav-item @yield('Dashboard_active')">
                            <a class="nav-link text-warning-emphasis" href="{{route('home')}}">
                                Site View
                            </a>
                        </li>
                    </ul>
                </li>
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
                <li class="nav-item">
                    <a class="nav-link text-warning-emphasis" href="logout">
                        <span>logout</span>
                    </a>
                </li>
                @else
                <li class="nav-item" aria-current="true">
                    <a class="nav-link text-warning-emphasis @yield('profile_active')" href="{{URL::asset('profile')}}">
                        profile
                    </a>
                </li>
                <li class="nav-item @yield('service_active') ">
                    <a class="nav-link text-warning-emphasis" href="">
                        <span>service</span>
                    </a>
                </li>
                <li class="nav-item @yield('Dashboard_active')">
                    <a class="nav-link text-warning-emphasis" href="{{route('home')}}">
                        Site View
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning-emphasis" href="logout">
                        <span>logout</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
