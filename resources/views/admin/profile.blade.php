@extends('admin.dashboard');
@section('profile_active', 'active');


@section('content_dashboard')

    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="{{ asset('/storage/userimage/' . Auth::user()->user_photo) }}" class="rounded-circle img-fluid"
                        style="width: 150px;" alt="Auth Image">
                    <h5 class="my-3 fw-bolder">
                        @if (Auth::user()->userttype === 'ADM')
                            <i class="fa fa-vcard text-warning"></i> {{ strtoupper(Auth::user()->userttype) }}
                        @else
                            <i class="fa fa-vcard text-warning"></i> {{ strtoupper(Auth::user()->userttype) }}
                        @endif
                    </h5>
                    <p class="text-black-50 mb-1 fs-4 fw-bolder">{{ strtoupper(Auth::user()->user_first_name) }}
                        {{ strtoupper(Auth::user()->user_last_name) }}</p>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body text-center">
                    <div class="row justify-content-center">
                        @foreach ($pios as $pio)
                            @if (Auth::user()->id === $pio->users_id)
                                <span class="col-lg-10 text-center py-2" id="havePio">{{ $pio->pio_text }}</span>
                            @endif
                        @endforeach
                    </div>
                    <div class="row justify-content-center" id="addPio">
                        <div class="col-lg-12">
                            Add Pio
                            <button class="border-0 bg-body text-warning fa fa-edit" onclick="toggleForm()"></button>
                            <form action="{{ route('pio.store') }}" method="post" id="pioForm" style="display: none">
                                @csrf
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="row mb-2">
                                            <input name="pioUser" style="display: none" value="{{ Auth::user()->id }}">
                                            <textarea class="form-control" name="pio_text" id="" cols="50" rows="5" placeholder="write pio"></textarea>
                                        </div>
                                        <div class="row">
                                            <button class="form-control btn btn-outline-warning"
                                                type="submit">save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::user()->user_first_name }}
                                {{ Auth::user()->user_last_name }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Phone</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ Auth::user()->phone }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="{{ url('js/script.js') }}"></script>
