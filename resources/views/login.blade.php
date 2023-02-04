@extends('layout.master')

@section('title', 'Login')

@section('content')

    <div class="row  d-flex align-items-center  p-5">
        <div class="col-lg-6 d-none d-lg-flex ">
            <img src="{{url('images/login.jpg')}}" alt="Trendy Pants and Shoes" class="w-100 h-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
        </div>
        <div class="col-lg-6 p-2">
            <div class="card-body py-5 px-md-5">
                <h2 class="text-dark fw-bolder">Login</h2>
                <form method="post" action="{{route('go.login')}}">

                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Email address</label>
                    <input type="email" id="email" name="email" class="form-control" required/>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required/>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="form-outline mb-4">
                    <div class="col d-flex">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>
                    </div>

                    <div class="col">
                        <!-- Simple link -->
                        <a class="text-dark" href="#!">Forgot password?</a>
                    </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn mypthirdbg btn-block mb-4">Sign in</button>

                </form>

            </div>
        </div>
    </div>
  <!-- Section: Design Block -->
@endsection
