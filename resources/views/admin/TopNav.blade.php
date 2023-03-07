<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{asset('storage/userimage/'. Auth::user()->user_photo)}}" class="rounded-circle" height="40rem" width="40rem" alt="Auth Image">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">
            @if (Auth::user()->userttype === 'ADM')
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {{-- ADMIN TOOLS LEFT BAR --}}
                <div class="d-inline-flex nav justify-content-center">
                    <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard Home">
                        <a class="nav-link text-light-emphasis @yield('Dash_active')" href="{{URL::asset('dashboard')}}">
                            <span class="fa fa-home fs-4"></span>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Profile">
                        <a class="nav-link text-light-emphasis @yield('profile_active')" href="{{URL::asset('profile')}}">
                            <span class="fa fa-user-circle fs-4"></span>
                        </a>
                    </li>
                    <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Users">
                        <a class="nav-link text-light-emphasis @yield('users_active')" href="{{route('users.index')}}">
                            <span class="fa fa-users fs-4"></span>
                        </a>
                    </li>
                    <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Messages">
                        <a class="nav-link text-light-emphasis @yield('message_active')" href="{{route('massage.index')}}">
                            <span class="material-icons fs-4">email</span>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Reservation">
                        <a class="nav-link text-light-emphasis @yield('Reservation_active')" href="">
                            <span class="material-icons fs-4">shopping_cart</span>
                        </a>
                    </li>
                </div>
                <div class="d-inline-flex nav justify-content-center">
                    <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Posts">
                        <a class="nav-link text-light-emphasis @yield('posts_active')" href="{{asset('posts')}}">
                            <span class="material-icons fs-4">event_note</span>
                        </a>
                    </li>
                    <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Comments">
                        <a class="nav-link text-light-emphasis @yield('comment_active')" href="{{asset('comment')}}">
                            <span class="fa fa-comments fs-4"></span>
                        </a>
                    </li>
                    <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Service">
                        <a class="nav-link text-light-emphasis @yield('service_active')" href="{{route('service.index')}}">
                            <span class="fa fa-gear fs-4"></span>
                        </a>
                    </li>
                    <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Category">
                        <a class="nav-link text-light-emphasis @yield('categories_active')" href="{{route('category.index')}}">
                            <span class="material-icons fs-4">settings_applications</span>
                        </a>
                    </li>
                    <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Back To Site">
                        <a class="nav-link text-light-emphasis" href="{{route('home')}}">
                            <span class="fa fa-step-backward fs-4"></span>
                        </a>
                    </li>
                </div>
                <div class="d-inline-flex nav justify-content-center">
                    <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Logout">
                        <a class="nav-link text-light-emphasis" href="logout">
                            <span class="fa fa-sign-out fs-4"></span>
                        </a>
                    </li>
                </div>
            </ul>
            {{-- SPV TOOLS LEFT BAR  --}}
            @else
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <div class="d-inline-flex nav justify-content-center">
                    <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard Home">
                        <a class="nav-link text-light-emphasis @yield('Dash_active')" href="{{URL::asset('dashboard')}}">
                            <span class="fa fa-home fs-4"></span>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Profile">
                        <a class="nav-link text-light-emphasis @yield('profile_active')" href="{{route('profile.index')}}">
                            <span class="fa fa-user-circle fs-4"></span>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Reservation">
                        <a class="nav-link text-light-emphasis @yield('Reservation_active')" href="">
                            <span class="material-icons fs-4">shopping_cart</span>
                        </a>
                    </li>
                    <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Service">
                        <a class="nav-link text-light-emphasis @yield('service_active')" href="{{route('service.index')}}">
                            <span class="fa fa-gear fs-4"></span>
                        </a>
                    </li>
                </div>
                <div class="d-inline-flex nav justify-content-center">
                    <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Back To Site">
                        <a class="nav-link text-light-emphasis" href="{{route('home')}}">
                            <span class="fa fa-step-backward fs-4"></span>
                        </a>
                    </li>
                    <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Logout">
                        <a class="nav-link text-light-emphasis" href="logout">
                            <span class="fa fa-sign-out fs-4"></span>
                        </a>
                    </li>
                </div>
                @endif
                
            </ul>
        </div>
    </div>
</nav>
