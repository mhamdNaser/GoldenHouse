

  <nav class="row navbar navbar-expand-lg mypseconbg navbar-dark fixed-top py-1 px-5">
    <div class="container p-2">
      <a class="logo navbar-brand d-flex align-items-center"><img src="{{url('/images/login.jpg')}}" alt="" width="90px">Golden House</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ms-3" id="collapsibleNavbar">
        <ul class="navbar-nav flex-grow-1 text-center justify-content-center">
          <li class="nav-item">
            <a class="nav-link fs-5" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="{{asset('contact')}}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="/seviceshow">Service</a>
          </li>
        </ul>
        <ul class="navbar-nav d-lg-flex text-center">
        @if (Route::has('login'))
          @auth
              @if (Auth::user()->userttype === 'ADM' || Auth::user()->userttype === 'SVP')
                <li class="nav-item dropdown">
                  <a class="nav-link d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span style="font-size: 12px">
                      {{ strtoupper(Auth::user()->user_first_name)}} {{ strtoupper(Auth::user()->user_last_name)}}&emsp;
                    </span>
                    <i class="fa fa-user-circle-o fs-4"></i>
                  </a>
                  <ul class="dropdown-menu me-5 mt-2">
                    <li><a class="dropdown-item" href="{{asset('blog')}}">Blog</a></li>
                    <li><a class="dropdown-item" href="{{asset('dashboard')}}">Dashboard</a></li>
                    <hr>
                    <li><a class="dropdown-item" href="logout">Log Out</a></li>
                  </ul>
                </li>
              @else
                <li class="nav-item dropdown">
                  <a class="nav-link d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <span style="font-size: 12px">
                        {{ strtoupper(Auth::user()->user_first_name)}} {{ strtoupper(Auth::user()->user_last_name)}}&emsp;
                      </span>
                      <i class="fa fa-user-circle-o fs-3"></i>
                  </a>
                  <ul class="dropdown-menu me-5 mt-2">
                    <li><a class="dropdown-item" href="{{asset('blog')}}">Blog</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <hr class="dropdown-divider">
                    <li><a class="dropdown-item" href="logout">Log Out</a></li>
                  </ul>
                </li>
              @endif
          @else
          <li class="nav-item me-2">
            <a class="nav-link" href="{{asset('login')}}" title="Login">Login<i class="fa fa-sign-out ms-2"></i></a>
          </li>
          <li class="nav-item me-2">
              <a class="nav-link" href="{{asset('register')}}" title="register">Register<i class="fa fa-cogs ms-2"></i></a>
          </li>
        @endif
        {{-- <li class="nav-item me-2">
          <a href="/cart" class="nav-link" title="cart">
            <i class="fa fa-opencart ms-2"></i>
            <span id="" class="badge rounded-pill mypimarybg cartelement" alt="Notifications" style="font-size: 0.6rem; margin-left : -10px">2</span>
          </a>
        </li>   --}}
      @endif

        </ul>
      </div>
    </div>
  </nav>
</div>

