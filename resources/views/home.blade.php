@extends('layout.master')

@section('title', 'Golen House')

@section('content')
    <!-- search and land section-->
    <div class="row myboxshadow my-bg-image" style="background-image: url({{ url('/images/slide4.jpg') }})">
        <div class="col-lg-6  myopacity bg-white vh-50">
            <div class="col-lg-12 bg-white myopacity0 rounded-3">
                <div class="row text-center text-dark">
                    <div class="col-lg-12 py-5">
                        <div class="row">
                            <img src="{{ url('/images/login.jpg') }}" alt=""><br>
                        </div>
                        <h1 class="fs-1">
                            The Golden House
                        </h1>
                        <p class="fs-5">When you are looking for safe, comfortable, and clean housing, we are your first
                            choice <br>
                            Start your experience with us where you deserve to be
                        </p>
                        <div class="row justify-content-center align-items-center g-2">
                            <div class="col-lg-6">
                                <a class="btn btn-primary " id="submitButton" href="/seviceshow">Go To Services</a>
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
                <h3 class="fs-1 fw-bold mypimarytext mytextshadow mb-4 text-center">
                    Categories Of Services
                </h3>
                @foreach ($categories as $category)
                    <div class="card col-lg-2 col-md-4 col-sm-6 ms-2 me-2 mt-3">
                        <img src="{{ asset('storage/categoryImg/' . $category->Category_Image) }}"
                            class="card-img-top imgcardheigh mt-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->Category_Name }}</h5>
                            <p class="card-text">
                                {{ $category->Category_Description }}
                            </p>
                        </div>
                        <div class="row p-2 m-2">
                            <div class="col-lg-12 text-center">
                                <a class="btn btn-warning mypimarybg text-white border-warning"
                                    href="{{ route('service.show', $category->id) }}">Show Services</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row mypthirdbg text-white p-5 justify-content-center align-items-center">
        <div class="col-lg-4">
            <img src="{{ url('/images/login.jpg') }}" alt="" width="100%">
        </div>
        <div class="col-lg-2 d-none d-lg-flex myopacity1">
            <i class="fa fa-arrow-left" style="font-size: 10rem;"></i>
        </div>
        <div class="col-lg-6">
            <div class="row justify-content-center align-items-center ">
                <div class="col-lg-12 p-2 bg-white rounded-3 mypsecontext myboxshadow1">
                    <h3>PROBLEMS</h3>
                    <p>
                        Unavailability of affordable housing for university students <br>
                        Housing cleanliness <br>
                        Find a college student roommate <br>
                        Finding transportation and keeping it on time
                    </p>
                    <hr class="mb-2 mt-0 d-inline-block mx-auto mypimarybg" style="width: 12rem; height: 2px" />
                    <h3>THE SOLVING</h3>
                    <p class="ms-2">
                        Our company is dedicated to providing university students with
                        secure housing that offers discounted prices and excellent services.<br>
                        Our team is comprised of specialized female and male workers who offer
                        regular apartment cleaning services to ensure a clean and comfortable living space.<br>
                        We aim to ease the burden of finding a housing partner for students by offering
                        affordable options that require no additional obligations beyond their individual payment.<br>
                        You can trust us to provide reliable transportation services that will arrive
                        at your doorstep on schedule, eliminating any worries you may have about getting to your
                        university.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-10 col-xl-8 text-center mt-5">
            <h3 class="mb-4">What Our Customers Say</h3>
            <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                Some of the opinions of our customers who had a nice experience with our website and services
            </p>
        </div>
    </div> --}}
    <div class="row justify-content-center m-4">
        <div class="col-lg-10">
            <div class="row  justify-content-center">

            </div>
        </div>
    </div>
@endsection

<script src="{{ url('js/script.js') }}"></script>
