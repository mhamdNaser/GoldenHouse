@extends('admin.dashboard')
@section('Reservation_active', 'active')
@section('title_header', 'Reservations :')

@section('button_header')
    <h3>All Reservations</h3>
@endsection

@section('content_dashboard')
    <div class="table-responsive">
        <table class="table align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID Card</th>
                    <th>Student Name</th>
                    <th>Service Name</th>
                    <th>Service Price</th>
                    <th>Service Category</th>
                    <th>Partner Name</th>
                    <th>Reservision state</th>
                    <th>End Date</th>
                    <th>Start Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($result as $item)
                    @if ( Auth::user()->userttype == 'ADM'  || (Auth::user()->userttype == 'SVP' && $item['partnerId'] == Auth::user()->id))
                        <tr>
                            <td>
                                <img src="{{asset('storage/userimage/'. $item['IdCard'])}}" class="" alt="" width="80px">
                            </td>
                            <td class="fw-bolder">{{ strtoupper($item['user-fname']) }}
                                {{ strtoupper($item['user-lname']) }}
                            </td>
                            <td class="fw-bolder">{{ strtoupper($item['servicename']) }}</td>
                            <td class="fw-bolder mypimarytext fs-5">
                                {{ strtoupper($item['servicprice']) }}
                                <span class="text-black-50 fw-normal" style="font-size: 12px">Per Of Month</span>
                            </td>
                            <td class="fw-bolder">{{ strtoupper($item['category']) }}</td>
                            <td class="fw-bolder mypimarytext">
                                {{ $item['partner-fname'] }} {{ $item['partner-lname'] }}
                            </td>
                            <td>{{ $item['startDate'] }}</td>
                            <td>{{ $item['endDate'] }}</td>
                            <td class="fw-bolder">
                                <form class="d-flex" method="post" action="{{route('reservision.update', $item['id'])}}">
                                    @method('PUT')
                                    @csrf

                                    @if ( $item['reserState'] == 'pending')
                                        <select class="form-select fw-bolder text-warning" id="state" name="state">
                                            <option value="pending" selected>{{ strtoupper($item['reserState']) }}</option>
                                            <option class="fw-bolder text-danger" value="reject">Reject</option>
                                            <option class="fw-bolder text-success" value="accept">Accept</option>
                                        </select>
                                        <button type="submit" class="btn btn-warning ms-1">Save</button>
                                    @endif
                                    @if ( $item['reserState'] == 'reject' )
                                        <select class="form-select fw-bolder text-danger" id="state" name="state">
                                            <option value="pending" selected>{{ strtoupper($item['reserState']) }}</option>
                                            <option class="fw-bolder text-warning" value="pending">Pending</option>
                                            <option class="fw-bolder text-success" value="accept">Accept</option>
                                        </select>
                                        <button type="submit" class="btn btn-warning ms-1">Save</button>
                                    @endif
                                    @if ( $item['reserState'] == 'accept' )
                                        <select class="form-select fw-bolder text-success" id="state" name="state">
                                            <option value="pending" selected>{{ strtoupper($item['reserState']) }}</option>
                                            <option class="fw-bolder text-danger" value="reject">Reject</option>
                                            <option class="fw-bolder text-warning" value="pending">Pending</option>
                                        </select>
                                        <button type="submit" class="btn btn-warning ms-1">Save</button>
                                    @endif
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

