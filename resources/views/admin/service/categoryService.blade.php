@extends('admin.dashboard')
@section('service_active', 'active')

@section('content_dashboard')
<div class="row pt-5 pb-5 mt-5 mb-5 justify-content-center">
    <h2 class="fs-1 fw-bold mypimarytext mytextshadow mb-4 text-center">
        Your Service Type
    </h2>
    <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
        <div class="card ms-4 me-4 mt-3">
            <img src="{{URL('storage/categoryImg/housing.jpg')}}" class="card-img-top imgcardheigh" alt="...">
            <div class="card-body">
                <h5 class="card-title">Housing</h5>
                <p class="card-text">
                    To Add Your House Service
                </p>
            </div>
            <div class="row p-2">
                <div class="col-lg-12 text-center">
                    <a class="btn btn-warning mypimarybg text-white border-warning" href="{{route('HouseService.create')}}">Show Service</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
        <div class="card ms-4 me-4 mt-3">
            <img src="{{URL('storage/categoryImg/clean.jpg')}}" class="card-img-top imgcardheigh" alt="...">
            <div class="card-body">
                <h5 class="card-title">Clean</h5>
                <p class="card-text">
                    To Add Your Clean Service
                </p>
            </div>
            <div class="row p-2">
                <div class="col-lg-12 text-center">
                    <a class="btn btn-warning mypimarybg text-white border-warning" href="{{route('CleanService.create')}}">Show Service</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
        <div class="card ms-4 me-4 mt-3">
            <img src="{{URL('storage/categoryImg/delivery.jpg')}}" class="card-img-top imgcardheigh" alt="...">
            <div class="card-body">
                <h5 class="card-title">Delivery</h5>
                <p class="card-text">
                    To Add Your Delivery Service
                </p>
            </div>
            <div class="row p-2">
                <div class="col-lg-12 text-center">
                    <a class="btn btn-warning mypimarybg text-white border-warning" href="{{route('DeliveryService.create')}}">Show Service</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection