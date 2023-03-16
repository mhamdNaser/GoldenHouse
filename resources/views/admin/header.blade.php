
<nav class="navbar-dark">
    <div class="row text-center">
        <img src="{{url('/images/login.png')}}" class="rounded-circle" alt="Auth Image">
        {{-- <img src="{{asset('/storage/userimage/'. Auth::user()->user_photo)}}" class="mb-2 rounded-circle" width="80%" alt="Auth Image">
        <h6 class="text-center text-white" >{{ strtoupper(Auth::user()->user_first_name)}}<br>{{ strtoupper(Auth::user()->user_last_name)}}</h6> --}}
    </div>

    {{-- LEFT SIDE BAR --}}
    <ul class="navbar-nav text-center">
        <hr class="text-secondary">

        {{-- ADMIN TOOLS LEFT BAR --}}
        @if (Auth::user()->userttype === 'ADM')
        <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard Home">
            <a class="text-light-emphasis @yield('Dash_active')" href="{{URL::asset('dashboard')}}">
                <span class="fa fa-home fs-5"></span>
            </a>
        </li>
        <hr class="text-secondary">
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Profile">
            <a class="text-light-emphasis @yield('profile_active')" href="{{route('profile.index')}}">
                <span class="fa fa-user-circle fs-5"></span>
            </a>
        </li>
        <hr class="text-secondary">
        <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Users">
            <a class="text-light-emphasis @yield('users_active')" href="{{route('users.index')}}">
                <span class="fa fa-users fs-5"></span>
            </a>
        </li>
        <hr class="text-secondary">
        <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Messages">
            <a class="text-light-emphasis @yield('message_active')" href="{{route('massage.index')}}">
                <span class="material-icons fs-5">email</span>
            </a>
        </li>
        <hr class="text-secondary">
        <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Posts">
            <a class="text-light-emphasis @yield('posts_active')" href="{{asset('posts')}}">
                <span class="material-icons fs-5">event_note</span>
            </a>
        </li>
        <hr class="text-secondary">
        <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Comments">
            <a class="text-light-emphasis @yield('comment_active')" href="{{asset('comment')}}">
                <span class="fa fa-comments fs-5"></span>
            </a>
        </li>
        <hr class="text-secondary">
        <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Service">
            <a class="text-light-emphasis @yield('service_active')" href="{{route('service.index')}}">
                <span class="fa fa-gear fs-5"></span>
            </a>
        </li>
        <hr class="text-secondary">
        <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Category">
            <a class="text-light-emphasis @yield('categories_active')" href="{{route('category.index')}}">
                <span class="material-icons fs-5">settings_applications</span>
            </a>
        </li>
        <hr class="text-secondary">
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Reservation">
            <a class="text-light-emphasis @yield('Reservation_active')" href="">
                <span class="material-icons fs-5">shopping_cart</span>
            </a>
        </li>
        <hr class="text-secondary">
        <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Back To Site">
            <a class="text-light-emphasis" href="{{route('home')}}">
                <span class="fa fa-step-backward fs-5"></span>
            </a>
        </li>
        <hr class="text-secondary">
        <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Logout">
            <a class="text-light-emphasis" href="logout">
                <span class="fa fa-sign-out fs-5"></span>
            </a>
        </li>
        {{-- SPV TOOLS LEFT BAR  --}}
        @else
        <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard Home">
            <a class="text-light-emphasis @yield('Dash_active')" href="{{URL::asset('dashboard')}}">
                <span class="fa fa-home fs-5"></span>
            </a>
        </li>
        <hr class="text-secondary">
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Profile">
            <a class="text-light-emphasis @yield('profile_active')" href="{{URL::asset('profile')}}">
                <span class="fa fa-user-circle fs-5"></span>
            </a>
        </li>
        <hr class="text-secondary">
        <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Service">
            <a class="text-light-emphasis @yield('service_active')" href="{{route('service.index')}}">
                <span class="fa fa-gear fs-5"></span>
            </a>
        </li>
        <hr class="text-secondary">
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Reservation">
            <a class="text-light-emphasis @yield('Reservation_active')" href="">
                <span class="material-icons fs-5">shopping_cart</span>
            </a>
        </li>
        <hr class="text-secondary">
        <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Back To Site">
            <a class="text-light-emphasis" href="{{route('home')}}">
                <span class="fa fa-step-backward fs-5"></span>
            </a>
        </li>
        <hr class="text-secondary">
        <li class="nav-item"  data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Logout">
            <a class="text-light-emphasis" href="logout">
                <span class="fa fa-sign-out fs-5"></span>
            </a>
        </li>
        @endif

    </ul>
</nav>

