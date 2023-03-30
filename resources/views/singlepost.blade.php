@extends('layout.master')

@section('title', 'Post')


<form class="mt-4" method="post" action="{{route('blog.update', $posts->id)}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <div class="row p-5 mt-5 justify-content-center" style="background-color: #f5f5f5">

        {{-- User Information --}}
        <div class="col-lg-2 mt-2 bg-white" style="height: 30rem">
            <form method="post" action="{{route('blog.index')}}" enctype="multipart/form-data">
                @csrf

                <div class="row mt-4 justify-content-center">
                    <div class="col-lg-12">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">
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
            <div class="row mb-4 mt-5 justify-content-center align-items-center">
                <div class="col-lg-9 shadow rounded-3 rounded-top">
                    <div >
                        @foreach ($user as $us)
                        @if ($us->id === $posts->users_id )
                        <div class="row pt-2 pb-1 bg-light">
                            <div class="col-lg-8">
                                <img src="{{asset('/storage/userimage/'. $us->user_photo)}}" class="rounded-circle me-2" height="30rem" width="30rem" alt="Auth Image">
                                <span class="fs-6">{{$us->user_first_name}}{{$us->user_last_name}}</span>
                            </div>
                            <div class="col-lg-4">
                                <span class="fs-6 text-black-50">{{ $posts->created_at}}</span>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <div class="row">
                            <div class="col-lg-12 col-md-12 p-3">
                                {{ $posts->post_text}}
                            </div>
                            <div class="col-lg-12 bg-light col-md-9">
                                <form class="row mb-0">
                                    <div class="col-1 flex-grow-1">
                                        <a class="btn" type="submit">
                                            <i class="fa fa-heart-o text-warning"></i>
                                            <span class="text-warning">
                                                {{ $ctlike }}
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-1">
                                        <div class="row">
                                            <a class="btn fa fa-comment-o text-warning">
                                                <span class="text-warning">
                                                    {{$count}}
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row border-top justify-content-center">
                        <div class="col-lg-11">
                            <form method="post" action="{{route('comment.store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="row g-3 mt-1 row-cols-lg-auto g-3 align-items-center">
                                    <div class="col-auto">
                                        <img src="{{asset('/storage/userimage/'. Auth::user()->user_photo)}}"  height="30px" width="30px" alt="Auth Image">
                                    </div>
                                    <div class="col-auto flex-grow-1">
                                        <input type="text" name="postId" value="{{$posts->id}}" style="display: none">
                                        <textarea class="form-control" name="comment_content" type="text" style="height: 30px" placeholder="comment here..." data-sb-validations="required"></textarea>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-outline-warning">comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 justify-content-center align-items-center g-2">
                <div class="col-lg-9">
                    @foreach ($comments as $com)
                    <div class="row mt-4 justify-content-center align-items-center g-2 bg-light border-bottom">
                        <span class="col-auto"><img class="rounded-circle img-thumbnail" src="{{asset('/storage/userimage/'. $com["user_photo"])}}" alt="" srcset="" width="20px"></span>
                        <span class="col-auto flex-grow-1 text-black-50">{{$com["user_fname"]}} {{$com["user_lname"]}}</span>
                        <span class="col-auto text-black-50">{{$com["comment_date"]}}</span>
                    </div>
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="col-lg-8 p-2">
                            {{$com["comment_text"]}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- List User --}}
        <div class="col-lg-2 mt-2 bg-white" style="height: 30rem">
            <div class="row border-bottom">
                <span class="align-middle bg-warning ps-4 pt-2 pb-2 fw-bolder mypsecontext">All User</span>
            </div>
            @foreach ($user as $us)
                @if ($us->id != Auth::user()->id)
                    @if (DB::table('friends')->where('frind_id', $us->id)->exists())
                        <form class="d-flex border-bottom p-2" method="post"
                            action="{{ route('friend.destroy', $us->id) }}">
                            @csrf
                            @method('delete')

                            <button class="fa fa-user-times bg-white border-0 me-2"></button>
                            <a class="align-middle text-dark text-decoration-none">{{ $us->user_first_name }}
                                {{ $us->user_last_name }}</a>
                        </form>
                    @else
                        <form class="d-flex border-bottom p-2" method="post" action="{{ route('friend.store') }}">
                            @csrf

                            <input type="text" name="id" value="{{ $us->id }}" style="display: none">
                            <button class="fa fa-user-plus bg-white border-0 me-2"></button>
                            <a class="align-middle text-dark text-decoration-none">{{ $us->user_first_name }}
                                {{ $us->user_last_name }}</a>
                        </form>
                    @endif
                    </form>
                @endif
            @endforeach
        </div>
    </div>
</form>

