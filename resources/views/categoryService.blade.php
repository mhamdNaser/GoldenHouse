@extends('layout.master')

@section('title', 'categoryService')

@section('content')
@include('layout.slide')
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-lg-8 mt-1 pt-5 pb-5 justify-content-center">
        <div class="card-group row mt-5 mb-5 g-2">
            <div class="row g-2 justify-content-center">
                @foreach ($service as $item)
                    <div class="col-lg-12 col-md-12">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                            <img src="{{ asset('/storage/serviceImg/' . $item->service_photo1) }}"
                                                class="card-img-top imgcardheigh" alt="...">
                                            <a href="#!">
                                                <div class="hover-overlay">
                                                    <div class="mask"
                                                        style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-7 col-xl-7">
                                        <h5>{{ $item->serviceName }}</h5>
                                        <div class="d-flex flex-row">
                                            <div class="text-danger mb-1 me-2">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span>289</span>
                                        </div>
                                        <h6 class="text-success">
                                            @if ($item->serviceCategory === 1)
                                                <div class="row p-2">
                                                    <div class="col-lg-2 mypsecontext fw-bolder">
                                                        <i
                                                            class="fa fa-bed me-2 mypimarytext"></i>{{ $item->romeNumber }}
                                                    </div>
                                                    <div class="col-lg-2 mypsecontext fw-bolder">
                                                        <img src="{{ asset('/images/room.png') }}"
                                                            style="width: 1.2rem "
                                                            class="me-2" />{{ $item->bedNumber }}
                                                    </div>
                                                </div>
                                            @endif
                                        </h6>
                                        <div class="mt-1 mb-0 text-muted small">
                                            {{ $item->serviceDescription }}
                                        </div>
                                        {{-- <p class="text-truncate mb-4 mb-md-0"></p> --}}
                                    </div>
                                    <div class="col-md-6 col-lg-2 col-xl-2 border-sm-start-none border-start">
                                        <div class="d-flex flex-row align-items-center mb-1" style="min-height: 50%">
                                            <h4 class="mb-1 me-1">{{ $item->servicePrice }}</h4>
                                            {{-- <span class="text-danger"><s>$21.99</s></span> --}}
                                        </div>
                                        <div class="d-flex mt-5">
                                            {{-- <button class="btn btn-primary btn-sm" type="button">Details</button> --}}
                                            <a class="btn btn-outline-warning btn-sm mt-2"
                                                href="{{ route('reservision.create', ['id' => $item->id, 'cat' => $item->serviceCategory ]) }}">
                                                Add to your service
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
