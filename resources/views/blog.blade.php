@extends('layout.master')

@section('title', 'Blog')

<div class="row p-5 mt-5 justify-content-center" style="background-color: #f5f5f5">

    {{-- User Information --}}
    <div class="col-lg-2 mt-2 bg-white" style="height: 30rem">
        <div>
            <div class="row mt-4 justify-content-center">
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <img src="{{ asset('/storage/userimage/' . Auth::user()->user_photo) }}"
                                class="rounded-circle img-thumbnail" alt="Auth Image">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12 p-3 text-center">
                            <span
                                class="text-warning fs-6">{{ strtoupper(Auth::user()->user_first_name) }}_{{ strtoupper(Auth::user()->user_last_name) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Post Form And Posts --}}
    <div class="col-lg-6 mt-2 ms-2 me-2 bg-white">
        <div class="row border-5 border-bottom justify-content-center">
            <div class="col-lg-10">
                <form method="post" action="{{ route('blog.index') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row g-3 mt-1 row-cols-lg-auto g-3 align-items-center">
                        <div class="col-auto">
                            <img src="{{ asset('/storage/userimage/' . Auth::user()->user_photo) }}" height="30px"
                                width="30px" alt="Auth Image">
                        </div>
                        <div class="col-auto flex-grow-1">
                            <textarea class="form-control" name="post_content" type="text" style="height: 30px" placeholder="post here..."
                                data-sb-validations="required"></textarea>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn mypthirdbg ">post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @foreach ($posts as $item)
            <div class="row mb-4 mt-5 justify-content-center align-items-center">
                <div class="col-lg-9 shadow rounded-3 rounded-top">
                    <div>
                        <div class="row pt-2 pb-1 bg-light">
                            <div class="col-lg-8">
                                <img src="{{ asset('/storage/userimage/' . $item['user_photo']) }}"
                                    class="rounded-circle me-2" height="30rem" width="30rem" alt="Auth Image">
                                <span class="fs-6">{{ $item['user_fname'] }} {{ $item['user_lname'] }}</span>
                            </div>
                            <div class="col-lg-4">
                                <span class="fs-6 text-black-50">{{ $item['post_date'] }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 p-3">
                                {{ $item['post_text'] }}
                            </div>
                            <div class="col-lg-12 bg-light col-md-12 align-items-center">
                                <div class="row" style="height: 2.4rem">
                                    <form class="col-auto flex-grow-1" method="post"
                                        action="{{ route('likes.store') }}">
                                        @csrf

                                        <input name="likeUser" style="display: none" value="{{ Auth::user()->id }}">
                                        <input name="likepost" style="display: none" value="{{ $item['post_id'] }}">
                                        <button class="btn fa fa-heart-o text-warning" type="submit">
                                            <span class="text-warning">
                                                {{ DB::table('likes')->where('posts_id', $item['post_id'])->count() > 0? DB::table('likes')->where('posts_id', $item['post_id'])->count(): 0 }}
                                            </span>
                                        </button>
                                    </form>
                                    <div class="col-auto">
                                        <a class="btn fa fa-comment-o text-warning"
                                            href="{{ route('comment.show', $item['post_id']) }}">
                                            <span class="text-warning">
                                                {{ $item['counter'] }}
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    {{-- List User --}}
    <div class="col-lg-2 mt-2 bg-white v-50" style="height: 30rem">
        <div class="v-50">
            <div class="row border-bottom">
                <span class="align-middle bg-warning ps-4 pt-2 pb-2 fw-bolder mypsecontext">Friend requests</span>
            </div>
            @foreach ($user as $us)
                @if (
                    $us->id != Auth::user()->id &&
                        DB::table('friends')->where('frind_id', Auth::user()->id)->exists() &&
                        DB::table('friends')->where('user_id', $us->id)->exists())
                    <div class="border-bottom p-2">
                        <div class="row border p-2">
                            <a class="align-middle text-center text-dark text-decoration-none">{{ $us->user_first_name }}
                                {{ $us->user_last_name }}</a>
                        </div>
                        <div class="row">
                            <form class="col-lg-6 border p-2 text-center "  method="post" action="{{ route('friend.update') }}">
                                @csrf

                                <input type="text" name="id" value="{{ $us->id }}" style="display: none">
                                <button class="fa fa-user-plus bg-white border-0 me-2 text-success"></button>
                            </form>
                            <form class="col-lg-6 border p-2 text-center" method="post" action="{{ route('friend.destroy', $us->id) }}">
                                @csrf
                                @method('delete')

                                <button class="fa fa-user-times bg-white border-0 me-2 text-danger"></button>
                            </form>
                        </div>
                    </div>
                @else
                @endif
            @endforeach
        </div>
        <div class="v-50 pt-3">
            <div class="row border-bottom">
                <span class="align-middle bg-warning ps-4 pt-2 pb-2 fw-bolder mypsecontext">All User</span>
            </div>
            @foreach ($user as $us)
                @if (
                    $us->id != Auth::user()->id &&
                        !DB::table('friends')->where('user_id', $us->id)->where('frind_id', Auth::user()->id)->exists())
                    @if (DB::table('friends')->where('frind_id', $us->id)->exists() &&
                            DB::table('friends')->where('user_id', Auth::user()->id)->exists())
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
                @endif
            @endforeach
        </div>
    </div>
</div>

<script src="{{ url('js/blog.js') }}"></script>
