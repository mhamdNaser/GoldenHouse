@extends('layout.master')

@section('title', 'Golen House')

<!-- search and land section-->
<div class="row myboxshadow my-bg-image" style="background-image: url({{url('/images/slide4.jpg')}})">
    <div class="col-lg-6  myopacity bg-white vh-50">
        <div class="col-lg-12 bg-white myopacity0 rounded-3">
            <div class="row text-center text-dark">
                <div class="col-lg-12 py-5">
                    <div class="row">
                        <img src="{{url('/images/login.jpg')}}" alt="" ><br>
                    </div>
                    <h1 class="fs-1">
                        The Golden House
                    </h1>
                    <p class="fs-5">When you are looking for safe, comfortable, and clean housing, we are your first choice <br>
                        Start your experience with us where you deserve to be
                    </p>
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-lg-6">
                            <form class="P-5">
                                <!-- search form input-->
                                <div class="row justify-content-center align-items-center g-2">
                                    <input class="form-control" id="email" type="text" placeholder="Search For" />
                                    <button class="btn btn-primary " id="submitButton" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Category Section -->
<div class="col-lg-12 mt-5">
    <div class="container-fluid pt-5 pb-5">
        <div class=" row justify-content-center pt-5 pb-5">
            <h2 class="fs-1 fw-bold mypimarytext mytextshadow mb-4 text-center">
                Category Service
            </h2>
            @foreach ($categories as $category)
                <div class="card col-lg-2 col-md-4 col-sm-6 ms-2 me-2 mt-3">
                    <img src="{{asset('storage/categoryImg/'.$category->Category_Image)}}" class="card-img-top imgcardheigh" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$category->Category_Name}}</h5>
                        <p class="card-text">
                            {{$category->Category_Description}}
                        </p>
                    </div>
                    <div class="row p-2 m-2">
                        <div class="col-lg-12 text-center">
                            <button class="btn btn-warning mypimarybg text-white border-warning" type="submit">Show Service</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="row mypthirdbg text-white p-5 justify-content-center align-items-center">
    <div class="col-lg-4">
        <img src="{{url('/images/login.jpg')}}" alt=""  width="100%">
    </div>
    <div class="col-lg-2 d-none d-lg-flex myopacity1">
        <i class="fa fa-arrow-left" style="font-size: 10rem;"></i>
    </div>
    <div class="col-lg-6">
        <div class="row justify-content-center align-items-center  d-none d-lg-flex">
            <div class="col-lg-8 p-3 bg-white rounded-3 mypsecontext myboxshadow1" style="height: 30rem ;">
                <h3 class="fs-1">PROBLEMS</h3>
                <p class="fs-6 ms-2 pb-3">
                    Unavailability of affordable housing for university students <br>
                    Housing cleanliness <br>
                    Find a college student roommate <br>
                    Finding transportation and keeping it on time
                </p>
                <hr class="mb-4 mt-0 d-inline-block mx-auto mypimarybg" style="width: 12rem; height: 2px"/>
                <h3 class="fs-1">THE SOLVING</h3>
                <p class="fs-6 ms-2">
                    Unavailability of affordable housing for university students <br>
                    Housing cleanliness <br>
                    Find a college student roommate <br>
                    Finding transportation and keeping it on time
                </p>
            </div>
        </div>
    </div>
</div>

@section('content')
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-md-10 col-xl-8 text-center mt-5">
        <h3 class="mb-4">What Our Customers Say</h3>
        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
            Some of the opinions of our customers who had a nice experience with our website and services
        </p>
      </div>
    </div>
    <div class="row justify-content-center g-2">
      <div class="card col-lg-3 mb-5 ms-2 me-2 d-flex">
        <div class="card testimonial-card">
          <div class="card-up mypimarybg"></div>
          <div class="avatar mx-auto bg-white">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
              class="rounded-circle img-fluid" />
          </div>
          <div class="card-body">
            <h6 class="mb-4 text-center">Maria Smantha</h6>
            <hr />
            <p class="dark-grey-text mt-4">
              <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet eos adipisci,
              consectetur adipisicing elit.
            </p>
          </div>
        </div>
      </div>
      <div class="card col-lg-3 mb-5 ms-2 me-2 d-flex">
        <div class="card testimonial-card">
          <div class="card-up mypimarybg"></div>
          <div class="avatar mx-auto bg-white">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
              class="rounded-circle img-fluid" />
          </div>
          <div class="card-body">
            <h6 class="mb-4 text-center">Lisa Cudrow</h6>
            <hr />
            <p class="dark-grey-text mt-4">
              <i class="fas fa-quote-left pe-2"></i>Neque cupiditate assumenda in maiores
              repudi mollitia architecto.
            </p>
          </div>
        </div>
      </div>
      <div class="card col-lg-3 mb-5 ms-2 me-2 d-flex">
        <div class="card testimonial-card">
          <div class="card-up mypimarybg"></div>
          <div class="avatar mx-auto bg-white">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
              class="rounded-circle img-fluid" />
          </div>
          <div class="card-body">
            <h6 class="mb-4 text-center">John Smith</h6>
            <hr />
            <p class="dark-grey-text mt-4">
              <i class="fas fa-quote-left pe-2"></i>Delectus impedit saepe officiis ab
              aliquam repellat rem unde ducimus.
            </p>
          </div>
        </div>
      </div>
    </div>
@endsection

<script src="{{url('js/script.js')}}"></script>
