@extends('layout.master')

@section('title', 'Blog')

<div class="row p-5">
    <div class="col-lg-2 pt-5 pb-5 border-end bg-white">
        <div class="row text-center">
            <a class="nav-brand p-4" href="#">
                <img src="{{asset('/storage/userimage/'. Auth::user()->user_photo)}}" class="rounded-circle" height="100px" width="100px" alt="Auth Image">
            </a>
            <h6 class="text-center text-warning">{{ strtoupper(Auth::user()->user_first_name)}}<br>{{ strtoupper(Auth::user()->user_last_name)}}</h6>
            <form method="post" action="{{route('blog.index')}}" enctype="multipart/form-data">
                @csrf
            
                <!-- message input -->
                <div class="form-outline pt-3">
                    <textarea class="form-control" name="post_content" type="text" placeholder="Enter your message here..." style="height: 5rem" data-sb-validations="required"></textarea>
                </div>
                <button type="submit" class="btn col-12 mt-3 mypthirdbg ">post</button>
            </form>
        </div>
    </div>
    <div class="col-lg-9 mt-5">
            @foreach ($posts as $item )
            <div class="row mb-4 justify-content-center align-items-center">
                <div class="col-lg-9 shadow">
                    <div >
                        <div class="row pt-2 pb-1 bg-light border-bottom align-items-end">
                            @foreach ($user as $us)
                            @if ($item->users_id === $us->id)
                            <div class="col-lg-9">
                                <img src="{{asset('/storage/userimage/'. $us->user_photo)}}" class="rounded-circle me-2" height="30rem" width="30rem" alt="Auth Image">
                                <span class="fs-6">{{$us->user_first_name}} {{$us->user_last_name}}</span>
                            </div>
                            <div class="col-lg-3">
                                <span class="fs-6 text-black-50">{{$us->created_at}}</span>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-lg-11 col-md-9 p-4">
                                {{$item->post_text}}
                            </div>
                            <div class="col-lg-1 col-md-9 align-self-end">
                                <div class="row">
                                    <button class="btn align-items-end" type="button" data-bs-toggle="dropdown">
                                        <i class="fa fa-comment-o text-warning"></i>
                                        <span style="display: none">
                                            @foreach ($comments as $com)
                                                @if ($item->id === $com->posts_id)
                                                    {{ $commentNumber= DB::table("comments")->where('posts_id', $item->id)->count() }}
                                                @else
                                                {{ $commentNumber= 0 }}
                                                @endif
                                            @endforeach
                                        </span>
                                        <span class="text-black-50">
                                            {{$commentNumber}}
                                        </span>
                                    </button>
                                    <div class="dropdown-menu w-50" style="width: 320px">
                                        <form  method="post" action="{{route('blog.index')}}" enctype="multipart/form-data" class="row ps-5 pe-5 mt-2">
                                            @csrf
            
                                            <input style="display: none" name="postId" value="{{$item->id}}">
                                            <textarea class="form-control" name="comment_content" type="text" placeholder="Enter your message here..." style="height: 5rem" data-sb-validations="required"></textarea>
                                            <button type="submit" class="btn btn-warning mt-2">test</button>
                                        </form>  
                                    </div>
                                </div>
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