

  <nav class="row navbar navbar-expand-lg mypseconbg navbar-dark fixed-top py-1 px-5">
    <div class="container ps-5 pe-5">
      <a class="logo" href="/home"><img src="{{url('/images/login.jpg')}}" alt="" width="80px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav flex-grow-1 text-center">
          <li class="nav-item">
            <a class="nav-link" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('contact')}}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/HomeService">Service</a>
          </li>
        </ul>
        <ul class="navbar-nav d-lg-flex text-center">
        @if (Route::has('login'))
          @auth
              @if (Auth::user()->userttype === 'ADM' || Auth::user()->userttype === 'SVP')
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-user-circle-o fs-3"></i>
                  </a>
                  <ul class="dropdown-menu me-5 mt-2" style="margin-left: -3rem">
                    <li><a class="dropdown-item" href="{{asset('blog')}}">Blog</a></li>
                    <li><a class="dropdown-item" href="{{asset('dashboard')}}">Dashboard</a></li>
                    <hr>
                    <li><a class="dropdown-item" href="logout">Log Out</a></li>
                  </ul>
                </li>
              @else
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

