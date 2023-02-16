@extends('layout.master')

@section('title', 'Blog')

<div class="row p-5 mt-5 justify-content-center" style="background-color: #f5f5f5">

    {{-- User Information --}}
    <div class="col-lg-2 mt-2 bg-white" style="height: 30rem">
        <form method="post" action="{{route('blog.index')}}" enctype="multipart/form-data">
            @csrf

            <div class="row mt-4 justify-content-center">
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <img src="{{asset('/storage/userimage/'. Auth::user()->user_photo)}}" class="rounded-circle img-thumbnail" alt="Auth Image">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12 p-3 text-center">
                            <span class="text-warning fs-6">{{ strtoupper(Auth::user()->user_first_name)}}_{{ strtoupper(Auth::user()->user_last_name)}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    {{-- Post Form And Posts --}}
    <div class="col-lg-6 mt-2 ms-2 me-2 bg-white">
        <div class="row border-5 border-bottom justify-content-center">
            <div class="col-lg-10">
                <form method="post" action="{{route('blog.index')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="row g-3 mt-1 row-cols-lg-auto g-3 align-items-center">
                        <div class="col-auto">
                            <img src="{{asset('/storage/userimage/'. Auth::user()->user_photo)}}"  height="30px" width="30px" alt="Auth Image">
                        </div>
                        <div class="col-auto flex-grow-1">
                            <textarea class="form-control" name="post_content" type="text" style="height: 30px" placeholder="post here..." data-sb-validations="required"></textarea>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn mypthirdbg ">post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @foreach ($posts as $item )
            <div class="row mb-4 mt-5 justify-content-center align-items-center">
                <div class="col-lg-9 shadow rounded-3 rounded-top">
                    <div >
                        <div class="row pt-2 pb-1 bg-light">
                            <div class="col-lg-8">
                                <img src="{{asset('/storage/userimage/'. $item["user_photo"])}}" class="rounded-circle me-2" height="30rem" width="30rem" alt="Auth Image">
                                <span class="fs-6">{{$item["user_fname"]}} {{$item["user_lname"]}}</span>
                            </div>
                            <div class="col-lg-4">
                                <span class="fs-6 text-black-50">{{$item["post_date"]}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 p-3">
                                {{$item["post_text"]}}
                            </div>
                            <div class="col-lg-12 bg-light col-md-9">
                                <form class="row mb-0" action="">
                                    <div class="col-1 flex-grow-1">
                                        <button class="btn" type="submit">
                                            <i class="fa fa-heart-o text-warning"></i>
                                            <span style="display: none">
                                                {{-- number of comment --}}
                                            </span>

                                        </button>
                                    </div>
                                    <div class="col-1">
                                        <button class="btn" type="button">
                                            <i class="fa fa-comment-o text-warning"></i>
                                            <span style="display: none">
                                                {{-- number of comment --}}
                                            </span>

                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- List User --}}
    <div class="col-lg-2 mt-2 bg-white" style="height: 30rem">
        @foreach ($user as $us)
            <div class="row border-bottom p-2">
                <span class="align-middle">{{$us->user_first_name}} {{$us->user_last_name}}</span>
            </div>
        @endforeach
    </div>
</div>

<script src="{{url('js/blog.js')}}"></script>



{{-- DB:: --}}
