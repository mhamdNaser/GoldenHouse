
@extends('admin.dashboard')
@section('service_active', 'active')
{{-- {{route('HouseService.update', $id)}} --}}
@section('content_dashboard')
<form class="mt-4" method="post" action="{{route('HouseService.update', $service->id)}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <input disabled class="form-control fw-bolder" style="display: none" name="userId" value="{{$service->partnerId}}">
            <input disabled class="form-control fw-bolder" name="catName" value="{{ strtoupper(Auth::user()->user_first_name)}} {{ strtoupper(Auth::user()->user_last_name)}}">
        </div>
    </div>
    <div class="col">
        
        <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example"  name="catId">
            @foreach ($category as $item)
            @if ( $service->serviceCategory == $item->id)
                <option class="text-dark" value="{{$item->id}}" selected disabled>{{$item->Category_Name}}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <label class="form-label" for="">Service Name</label>
            <input class="form-control" type="text" id="fname" name="service_name" required placeholder="Service Name" value="{{$service->serviceName}}">
        </div>
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <label class="form-label" for="">Service Description</label>
            <input class="form-control" type="text" id="lname" name="service_desc" required placeholder="Service Description" value="{{$service->serviceDescription}}">
        </div>
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <label class="form-label" for="">Each Bed Price</label>
            <input class="form-control" type="text" id="lname" name="price_bed" required placeholder="Service price" value="{{$service->price_bed}}">
        </div>
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <label class="form-label" for="inputGroupFile01">Rome Number</label>
            <select class="form-select" aria-label="Register As"  name="romeNumber">
                <option selected disabled></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <label class="form-label" for="inputGroupFile01">Bed Number</label>
            <select class="form-select" aria-label="Register As"  name="bedNumber">
                <option selected disabled></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <label class="form-label" for="inputGroupFile01">Upload photo 1</label>
            <input type="file" name="photo1" class="form-control" id="inputGroupFile01" value="">
        </div>
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <label class="form-label" for="inputGroupFile01">Upload photo 2</label>
            <input type="file" name="photo2" class="form-control" id="inputGroupFile01" value="">
        </div>
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <label class="form-label" for="inputGroupFile01">Upload photo 3</label>
            <input type="file" name="photo3" class="form-control" id="inputGroupFile01" value="">
        </div>
    </div>
    <!-- Submit button -->
    <button type="submit" class="btn mypthirdbg btn-block mb-4" aria-disabled="true" >Save</button>

</form>

@endsection
