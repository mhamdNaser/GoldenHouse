@extends('layout.master')

@section('title', 'service')

<div class="row justify-content-center mypimarybg  pt-5 mt-5 rounded fixed-top">
    <div class="col-lg-8 col-md-8 col-sm-10">
        <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-6">
                <select class="form-select form-select-sm mb-3 " aria-label=".form-select-lg example">
                    <option selected disabled>Price</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <select class="form-select form-select-sm mb-3 " aria-label=".form-select-lg example">
                    <option selected disabled>Quality</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
    </div>
</div>


<div class="mt-5 pt-5">
    @section('content')
    <div class="col-lg-12 mt-5 pt-5 justify-content-center">
        <div class="card-group row mt-5 p-2 g-2">
            <h2 class="fs-1 fw-bold mypimarytext mytextshadow mb-4 text-center">
                House
            </h2>
            <div class="row g-2 justify-content-center">
                <div class="card col-lg-3 col-sm-12 ms-3 me-3 mb-3">
                    <img src="{{url('/images/slide1.jpg')}}" class="card-img-top imgcardheigh" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="row p-2">
                        <div class="col-lg-12 text-center">
                            <button class="btn btn-warning mypimarybg text-white border-warning" type="submit">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="card col-lg-3 col-sm-12 ms-3 me-3 mb-3">
                    <img src="{{url('/images/slide2.jpg')}}" class="card-img-top imgcardheigh" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="row p-2">
                        <div class="col-lg-12 text-center">
                            <button class="btn btn-warning mypimarybg text-white border-warning" type="submit">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="card col-lg-3 col-sm-12 ms-3 me-3 mb-3">
                    <img src="{{url('/images/slide3.jpg')}}" class="card-img-top imgcardheigh" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="row p-2">
                        <div class="col-lg-12 text-center">
                            <button class="btn btn-warning mypimarybg text-white border-warning" type="submit">ADD TO CART</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="mb-4 mt-0 mx-auto text-center mypimarybg" style="width: 50%; height: 2px"/>

    <div class="col-lg-12 mt-2">
        <div class="card-group row p-5 g-2">
            <h2 class="fs-1 fw-bold mypimarytext mytextshadow mb-4 text-center">
                Cleaning
            </h2>
            <div class="row g-2 justify-content-center">
                <div class="card col-lg-3 ms-3 me-3 mb-3">
                    <img src="{{url('/images/slide1.jpg')}}" class="card-img-top imgcardheigh" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="row p-2">
                        <div class="col-lg-12 text-center">
                            <button class="btn btn-warning mypimarybg text-white border-warning" type="submit">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="card col-lg-3 ms-3 me-3 mb-3">
                    <img src="{{url('/images/slide2.jpg')}}" class="card-img-top imgcardheigh" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="row p-2">
                        <div class="col-lg-12 text-center">
                            <button class="btn btn-warning mypimarybg text-white border-warning" type="submit">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="card col-lg-3 ms-3 me-3 mb-3">
                    <img src="{{url('/images/slide3.jpg')}}" class="card-img-top imgcardheigh" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="row p-2">
                        <div class="col-lg-12 text-center">
                            <button class="btn btn-warning mypimarybg text-white border-warning" type="submit">ADD TO CART</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="mb-4 mt-0 mx-auto mypimarybg" style="width: 50%; height: 2px"/>

    <div class="col-lg-12 mt-2">
        <div class="card-group row p-5 g-2">
            <h2 class="fs-1 fw-bold mypimarytext mytextshadow mb-4 text-center">
                Delivery
            </h2>
            <div class="row g-2 justify-content-center">
                <div class="card col-lg-3 ms-3 me-3 mb-3">
                    <img src="{{url('/images/slide1.jpg')}}" class="card-img-top imgcardheigh" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="row p-2">
                        <div class="col-lg-12 text-center">
                            <button class="btn btn-warning mypimarybg text-white border-warning" type="submit">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="card col-lg-3 ms-3 me-3 mb-3">
                    <img src="{{url('/images/slide2.jpg')}}" class="card-img-top imgcardheigh" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="row p-2">
                        <div class="col-lg-12 text-center">
                            <button class="btn btn-warning mypimarybg text-white border-warning" type="submit">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="card col-lg-3 ms-3 me-3 mb-3">
                    <img src="{{url('/images/slide3.jpg')}}" class="card-img-top imgcardheigh" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="row p-2">
                        <div class="col-lg-12 text-center">
                            <button class="btn btn-warning mypimarybg text-white border-warning" type="submit">ADD TO CART</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

</div>

