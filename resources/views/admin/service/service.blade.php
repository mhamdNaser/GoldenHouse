@extends('admin.dashboard')
@section('service_active', 'active')

@section('button_header')
    <div class="row">
        <div class="col">
            <a href="/categoryService"><button type="submit" class="btn mypthirdbg" aria-disabled="true" >Add Service</button></a>
        </div>
        {{-- <div class="col">
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Category</option>
                @foreach ($category as $item)
                    <option class=" text-dark" value="{{$item->id}}">{{$item->Category_Name}}</option>
                @endforeach
            </select>
        </div> --}}
    </div>
@endsection

@section('content_dashboard')
<div class=" table-responsive">
<table class="table align-middle text-center">
    <thead class="table-dark">
        <tr>
            <th>Service image</th>
            <th>Service Name</th>
            <th>Service Price</th>
            <th>Partner Name</th>
            <th>Rooms</th>
            <th>Beds</th>
            <th>Service Category</th>
            <th>Service Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($housing as $item)
        @if( Auth::user()->userttype === 'ADM'  || (Auth::user()->userttype === 'SVP' && $item->partnerId == Auth::user()->id))
        <tr>
            <td><img src="{{asset('/storage/serviceImg/' . $item->service_photo1)}}" class="rounded-circle" alt="" width="80px"></td>
            <td class="fw-bolder">{{$item->serviceName}}</td>
            <td class="fw-bolder"><span class="text-danger">{{$item->servicePrice}}</span> JD</td>
            @foreach ($users as $user)
                @if ($user->id === $item->partnerId)
                    <td class="fw-bolder">{{$user->user_first_name}} {{$user->user_last_name}}</td>
                @endif
            @endforeach
            <td class="fw-bolder text-black-50">rome : {{$item->romeNumber}} </td>
            <td class="fw-bolder text-black-50">bed : {{$item->bedNumber}}</td>
            @foreach ($category as $cat)
                @if ( $cat->id === $item->serviceCategory)
                    <td class="fw-bolder">{{$cat->Category_Name}}</td>
                @endif
            @endforeach
            <td>{{$item->serviceDescription}}</td>
            <td>
            <div class="row g-2"  style="min-width: 10rem">
                <form action="{{route('HouseService.destroy', $item->id)}}" method="post" class="col-lg-6">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger me-2">Delete</button>

                </form>
                <div class="col-lg-6">
                    <a href="{{route('HouseService.edit', $item->id)}}" class="btn btn-warning">edit </a>
                </div>
            </div>
          </td>
        </tr>
        @endif
        @endforeach
        @foreach ($cleaning as $item)
        @if(Auth::user()->userttype === 'ADM'  || (Auth::user()->userttype === 'SVP' && $item->partnerId == Auth::user()->id))
        <tr>
            <td><img src="{{asset('/storage/serviceImg/' . $item->service_photo1)}}" class="rounded-circle" alt="" width="80px"></td>
            <td class="fw-bolder">{{$item->serviceName}}</td>
            <td class="fw-bolder"><span class="text-danger">{{$item->servicePrice}}</span> JD</td>
            @foreach ($users as $user)
                @if ($user->id === $item->partnerId)
                    <td class="fw-bolder">{{$user->user_first_name}} {{$user->user_last_name}}</td>
                @endif
            @endforeach
            <td class="fw-bolder text-black-50"></td>
            <td class="fw-bolder text-black-50"></td>
            @foreach ($category as $cat)
                @if ( $cat->id === $item->serviceCategory)
                    <td class="fw-bolder">{{$cat->Category_Name}}</td>
                @endif
            @endforeach
            <td>{{$item->serviceDescription}}</td>
            <td>
            <div class="row g-2"  style="min-width: 10rem">
                <form action="{{route('CleanService.destroy', $item->id)}}" method="post" class="col-lg-6">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger me-2">Delete</button>

                </form>
                <div class="col-lg-6">
                    <a href="{{route('CleanService.edit', $item->id)}}" class="btn btn-warning">edit </a>
                </div>
            </div>
          </td>
        </tr>
        @endif
        @endforeach
        @foreach ($delivery as $item)
        @if(Auth::user()->userttype === 'ADM'  || (Auth::user()->userttype === 'SVP' && $item->partnerId == Auth::user()->id))
        <tr>
            <td><img src="{{asset('/storage/serviceImg/' . $item->service_photo1)}}" class="rounded-circle" alt="" width="80px"></td>
            <td class="fw-bolder">{{$item->serviceName}}</td>
            <td class="fw-bolder"><span class="text-danger">{{$item->servicePrice}}</span> JD</td>
            @foreach ($users as $user)
                @if ($user->id === $item->partnerId)
                    <td class="fw-bolder">{{$user->user_first_name}} {{$user->user_last_name}}</td>
                @endif
            @endforeach
            <td class="fw-bolder text-black-50"></td>
            <td class="fw-bolder text-black-50"></td>
            @foreach ($category as $cat)
                @if ( $cat->id === $item->serviceCategory)
                    <td class="fw-bolder">{{$cat->Category_Name}}</td>
                @endif
            @endforeach
            <td>{{$item->serviceDescription}}</td>
            <td>
            <div class="row g-2"  style="min-width: 10rem">
                <form action="{{route('DeliveryService.destroy', $item->id)}}" method="post" class="col-lg-6">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger me-2">Delete</button>

                </form>
                <div class="col-lg-6">
                    <a href="{{route('DeliveryService.edit', $item->id)}}" class="btn btn-warning">edit </a>
                </div>
            </div>
          </td>
        </tr>
        @endif
        @endforeach
    </tbody>
  </table>
</div>
@endsection
<script src="{{url('js/script.js')}}"></script>
