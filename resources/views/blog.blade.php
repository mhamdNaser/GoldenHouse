@extends('layout.master')

@section('title', 'Blog')

<div class="row p-5">
        <div class="row g-3 mt-1 row-cols-lg-auto g-3 align-items-center">
            <div class="col-auto">
                <img src="{{asset('/storage/userimage/'. Auth::user()->user_photo)}}" class="rounded-circle" height="30px" width="30px" alt="Auth Image">
            </div>
            <div class="col-auto">
                <span class="text-warning fs-6">{{ strtoupper(Auth::user()->user_first_name)}}_{{ strtoupper(Auth::user()->user_last_name)}}</span>
            </div>
            <form method="post" action="{{route('blog.index')}}" enctype="multipart/form-data">
                @csrf

                <!-- message input -->
                <div class="col-auto">
                    <textarea class="form-control" name="post_content" type="text" placeholder="Enter your message here..." data-sb-validations="required"></textarea>
                </div>
                <button type="submit" class="btn mt-3 mypthirdbg ">post</button>
            </form>
        </div>
    <div class="col-lg-9 mt-5">
        @foreach ($posts as $item )
            <div class="row mb-4 justify-content-center align-items-center">
                <div class="col-lg-9 shadow rounded-3 rounded-top">
                    <div >
                        <div class="row border-warning border-3 border-top border-start rounded-3 rounded-top pt-2 pb-1 bg-light align-items-end">
                            <div class="col-lg-9">
                                <img src="{{asset('/storage/userimage/'. $item["user_photo"])}}" class="rounded-circle me-2" height="30rem" width="30rem" alt="Auth Image">
                                <span class="fs-6">{{$item["user_fname"]}} {{$item["user_lname"]}}</span>
                            </div>
                            <div class="col-lg-3">
                                <span class="fs-6 text-black-50">{{$item["post_date"]}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 p-3">
                                {{$item["post_text"]}}
                            </div>
                            <div class="col-lg-12 bg-light col-md-9 border-warning border-3 border-bottom border-end rounded-3 rounded-bottom">
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
</div>
<script src="{{url('js/blog.js')}}"></script>



{{-- DB:: --}}
