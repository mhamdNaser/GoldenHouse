@extends('layout.master')

@section('title', 'service')

<div class="row justify-content-center mypimarybg  pt-5 mt-5 rounded fixed-top">
    <div class="col-lg-8 col-md-8 col-sm-10">
        <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-6">
                {{-- <select class="form-select form-select-sm mb-3 " aria-label=".form-select-lg example">
                    <option selected disabled>Price</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select> --}}
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                {{-- <select class="form-select form-select-sm mb-3 " aria-label=".form-select-lg example">
                    <option selected disabled>Quality</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select> --}}
            </div>
        </div>
    </div>
</div>


<div class="mt-5 pt-5">
    @section('content')
    <div class="col-lg-12 mt-5 pt-5 justify-content-center">
        <div class="card-group row mt-5 mb-5 g-2">
            <div class="row g-2 justify-content-center">
            @foreach ($result as $item)
                    <div class="card col-lg-3 col-sm-12 ms-2 me-2 mb-3">
                        <img src="{{asset('/storage/serviceImg/' . $item['service_photo'])}}" class="card-img-top imgcardheigh" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$item['serviceName']}}</h5>
                            <p class="card-text">{{$item['serviceDescription']}}</p>
                        </div>
                        <div class="ps-3 pt-1 pb-1 border-top border-bottom">
                            <p class="m-0 p-0"><span class="fw-bolder text-danger">{{$item['service_price']}}</span> JD</p>
                            <div class="rating fs-6">
                                <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Rocks!">5 stars</label>
                                <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Rocks!">4 stars</label>
                                <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Pretty good">3 stars</label>
                                <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">2 stars</label>
                                <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Pretty good">2 stars</label>
                              </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-lg-12 text-center">
                                <a class="btn btn-warning mypimarybg text-white border-warning" href="cart" type="submit">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
    @endsection
</div>

