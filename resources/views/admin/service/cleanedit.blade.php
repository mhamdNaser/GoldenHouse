
@extends('admin.dashboard')
@section('service_active', 'active')
{{-- {{route('HouseService.update', $id)}} --}}
@section('content_dashboard')
<form class="mt-4" method="post" action="{{route('CleanService.update', $service->id)}}" enctype="multipart/form-data">
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
            <option selected disabled>Category</option>
            @foreach ($category as $item)
                <option class=" text-dark" value="{{$item->id}}">{{$item->Category_Name}}</option>
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
            <label class="form-label" for="">Price</label>
            <input class="form-control" type="text" id="lname" name="price" required placeholder="Service price" value="{{$service->servicePrice}}">
        </div>
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <label class="form-label" for="inputGroupFile01">Upload photo</label>
            <input type="file" name="photo1" class="form-control" id="inputGroupFile01" value="">
        </div>
    </div>
    <!-- Submit button -->
    <button type="submit" class="btn mypthirdbg btn-block mb-4" aria-disabled="true" >Save</button>

</form>

@endsection
