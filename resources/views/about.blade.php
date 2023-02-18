@extends('layout.master')

@section('title', 'About Us')

<div class="row myboxshadow" style="background-image: url({{url('/images/about-bg.jpg')}}); background-size: cover; background-attachment: fixed; position: center center">
    <div class="col-lg-7 myopacity0 rounded-3">
        <div class="text-dark">
            <div class="col-lg-12 py-5 px-lg-5">
                <div class="row">
                    <img src="{{url('/images/login.jpg')}}" alt="" ><br>
                    <h1 class="fs-1 fw-bold mypimarytext mytextshadow text-center  mb-5" style="margin-top: -4rem">
                        The Golden House
                    </h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <p class=" fs-5">We started as a small company in 2022<br>
                            The main objective was to secure housing for students coming to Aqaba to complete their studies <br>
                            Soon our partnerships began to increase and we expanded to serve students all over Jordan<br>
                        </p>
                        <div class=" text-center">
                            <h5>The two governors who are in it</h5>
                            <p>
                                Amman<br>
                                Karak<br>
                                Ajloun<br>
                                Salt<br>
                                snag
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-5">
                    <div class="card-group row p-1 text-center">
                        <div class="card border-0 bg-transparent ms-3 me-3 align-items-center">
                          <h2 class="fs-1 fw-bold mypimarytext mytextshadow1 mb-4 text-center justify-content-center">
                              The Partner
                          </h2>
                        </div>
                    </div>
                    <div class="card-group row p-1 text-center">
                        <div class="card ms-3 me-3 mb-3 rounded-pill align-items-center p-4">
                            <img src="{{url('/images/partner.png')}}" class="rounded-circle" alt="..." width="80rem">
                            <div class="card-body">
                                <h5 class="card-title mt-2">Card title</h5>
                            </div>
                        </div>
                        <div class="card ms-3 me-3 mb-3 rounded-pill align-items-center p-4">
                            <img src="{{url('/images/partner.png')}}" class="rounded-circle" alt="..." width="80rem">
                            <div class="card-body">
                                <h5 class="card-title mt-2">Card title</h5>
                            </div>
                        </div>
                        <div class="card ms-3 me-3 mb-3 rounded-pill align-items-center p-4">
                            <img src="{{url('/images/partner.png')}}" class="rounded-circle" alt="..." width="80rem">
                            <div class="card-body">
                                <h5 class="card-title mt-2">Card title</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('content')
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-md-10 col-xl-8 text-center mt-5">
        <h3 class="mb-4">Our Team</h3>
        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
            Our team of programmers who designed and started this project on their own
        </p>
      </div>
    </div>
    <div class="row justify-content-center g-2">
      <div class="card col-lg-3 mb-5 ms-2 me-2 d-flex">
        <div class="card testimonial-card">
          <div class="card-up mypseconbg"></div>
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
          <div class="card-up mypseconbg"></div>
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
          <div class="card-up mypseconbg"></div>
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