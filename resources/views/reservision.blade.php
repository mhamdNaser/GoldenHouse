@extends('layout.master')

@section('title', 'Register')

<div class="pt-5">
    @section('content')
        <div class="row justify-content-center mt-5">
            @foreach ($service as $item)
                @if ($id == $item->id)
                    <div class="row justify-content-center pb-3">
                        @if ($item->serviceCategory === 1)
                            <div class="col-lg-7 col-xl-7 col-md-6 col-sm-6">
                                <img src="{{ asset('/storage/serviceImg/' . $item->service_photo1) }}" class="w-100"
                                    style="max-height: 330px" alt="...">
                            </div>
                            <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6">
                                <div class="row myopacity mb-2">
                                    <img src="{{ asset('/storage/serviceImg/' . $item->service_photo2) }}"
                                        style="max-height: 160px" alt="...">
                                </div>
                                <div class="row myopacity">
                                    <img src="{{ asset('/storage/serviceImg/' . $item->service_photo3) }}"
                                        style="max-height: 160px" alt="...">
                                </div>
                            </div>
                        @else
                            <div class="col-lg-10 col-xl-10 col-md-12 col-sm-12">
                                <img src="{{ asset('/storage/serviceImg/' . $item->service_photo1) }}" class="w-100"
                                style="max-height: 330px" alt="...">
                            </div>
                        @endif
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="row border-bottom">
                                <h2 class="mypimarytext fw-bolder">Service Details</h2>
                            </div>
                            <div class="mt-3">
                                <p class="fw-bolder fs-4">{{ strtoupper($item->serviceName) }} <span
                                        class="fs-6 fw-normal text-black-50"> {{ $item->created_at }}</span></p>
                                <p class="fw-bolder fs-5 mypimarytext">{{ $item->servicePrice }}
                                    @if ($item->serviceCategory === 1)
                                        <span class="fs-6 fw-normal text-black-50">For bed in month</span>
                                    @else
                                        <span class="fs-6 fw-normal text-black-50">Per of month</span>
                                    @endif
                                </p>
                                <p>
                                    @if ($item->serviceCategory === 1)
                                        <div class="row">
                                            <div class="col-lg-1 mypsecontext fw-bolder">
                                                <i class="fa fa-bed me-2 mypimarytext"></i>{{ $item->romeNumber }}
                                            </div>
                                            <div class="col-lg-1 mypsecontext fw-bolder">
                                                <img src="{{ asset('/images/room.png') }}" style="width: 1.2rem"
                                                    class="me-2" />{{ $item->bedNumber }}
                                            </div>
                                        </div>
                                    @endif
                                </p>
                                <p>{{ $item->serviceDescription }}</p>
                            </div>
                        </div>
                    </div>
                    @php
                        $serviceid = $item->id;
                        $catid = $item->serviceCategory;
                        $partnerid = $item->partnerId;
                        $input = ['users_id' => Auth::user()->id ,'serviceid' => $serviceid, 'catid' => $catid, 'partnerid' => $partnerid];
                    @endphp
                @endif
            @endforeach
            <form class="col-lg-9 col-xl-9 border-top p-2" method="post"
                action="{{ route('reservision.store', $input) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="row mb-1">
                    <h2 class="mypimarytext fw-bolder">Reservision</h2>
                </div>
                <!-- user input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="">Reservation start date</label>
                    <input class="form-control" type="date" id="start-date" name="start_date" required
                        onchange="checkdate()">
                    <p id="starterror"></p>
                </div>
                <div class="form-outline mb-3">
                    <label class="form-label" for="">Reservation end date</label>
                    <input class="form-control" type="date" id="end-date" name="end_date" required
                        onchange="checkReservationDates()">
                    <p id="end-date-error"></p>
                </div>
                <div class="input mb-3">
                    <label class="form-label" for="inputGroupFile01">ID Card</label>
                    <input type="file" name="photo" class="form-control" id="inputGroupFile01">
                </div>



                <!-- Submit button -->
                <button type="submit" id="submit" class="btn mypthirdbg btn-block mb-4" aria-disabled="true"
                    onchange="opensubmit()" disabled>Register</button>

            </form>
        </div>

    @endsection
</div>


<!-- Section: Design Block -->
<script src="{{ url('js/date.js') }}"></script>
