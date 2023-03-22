
@extends('admin.dashboard')
@section('service_active', 'active')

@section('content_dashboard')
<form class="mt-4" method="post" action="{{route('CleanService.store')}}" enctype="multipart/form-data">
    @csrf

    <!-- user input -->
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <input class="form-control fw-bolder" style="display: none" name="userId" value="{{ strtoupper(Auth::user()->id)}}">
            <input class="form-control fw-bolder" name="catName" value="{{ strtoupper(Auth::user()->user_first_name)}} {{ strtoupper(Auth::user()->user_last_name)}}">
        </div>
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <input class="form-control fw-bolder" name="catName" value="{{$housingname}}">
            <input style="display: none" name="catId" value="{{$housing}}">
        </div>
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <label class="form-label" for="">Service Name</label>
            <input class="form-control" type="text" id="fname" name="service_name" required placeholder="Service Name">
        </div>
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <label class="form-label" for="">Service Description</label>
            <textarea class="form-control" type="text" id="lname" rows="4" name="service_desc" required placeholder="Service Description"></textarea>
        </div>
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <label class="form-label" for="">Price</label>
            <input class="form-control" type="text" id="lname" name="price" required placeholder="Service price">
        </div>
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <label class="form-label" for="inputGroupFile01">Upload photo</label>
            <input type="file" name="photo1" class="form-control" id="inputGroupFile01">
        </div>
    </div>
    <!-- Submit button -->
    <button type="submit" class="btn mypthirdbg btn-block mb-4" aria-disabled="true" >Save</button>

</form>

@endsection

