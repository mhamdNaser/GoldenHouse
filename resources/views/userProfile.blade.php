@extends('layout.master')

@section('title', 'profile')


<div class="pt-5">
    <div class="row justify-content-center mt-5 py-5">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="{{ asset('/storage/userimage/' . Auth::user()->user_photo) }}"
                        class="rounded-circle img-fluid" style="width: 150px;" alt="Auth Image">
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
            <div class="card mb-4 p-2">
                <h4 class="text-warning fw-bolder ms-1 border-bottom pb-2">Service In Pending</h4>
                @foreach ($result as $item)
                        @if ($item['usersId'] == Auth::user()->id && $item['reserState'] == 'pending' )
                            <div class="row ps-3 pe-3">
                                <span  class="col-4 fw-bolder">{{ strtoupper($item['servicename']) }} <hr /></span>
                                <span class="col-4 text-black-50">{{ $item['category'] }}</span>
                                <span class="col-4 fw-bolder">{{ strtoupper($item['servicprice']) }} JD </span>
                            </div>
                        @endif
                    @endforeach
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
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="text-warning fw-bolder ms-1 border-bottom pb-2">My Service</h2>
                    @foreach ($result as $item)
                        @if ($item['usersId'] == Auth::user()->id && $item['reserState'] == 'accept' )
                            <div class="row justify-content-center align-items-end mb-2">
                                <div class="col-lg-4 col-md-3">
                                    <img src="{{ asset('storage/serviceImg/' . $item['serviceimage']) }}" class="img-fluid w-100" style="max-height: 180px" alt="">
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-10 p-2">
                                    <h4>{{ strtoupper($item['servicename']) }}</h4>
                                    Service Category : <span
                                        class="fw-bolder">{{ strtoupper($item['category']) }}</span><br>
                                    Partner Name : <span
                                        class="fw-bolder">{{ strtoupper($item['partner-fname']) }}{{ strtoupper($item['partner-lname']) }}</span><br>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-10 p-2">
                                    Start From : <span class="fw-bolder">{{ $item['startDate'] }}</span><br>
                                    End In : <span class="fw-bolder">{{ $item['endDate'] }}</span><br>
                                    Service Price : <span
                                        class="fw-bolder">{{ strtoupper($item['servicprice']) }}</span>
                                    <span class="text-black-50 fw-normal" style="font-size: 12px">Per Of Month</span>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ url('js/script.js') }}"></script>
