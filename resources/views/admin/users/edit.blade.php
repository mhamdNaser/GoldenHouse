
@extends('admin.dashboard')
@section('users_active', 'active')

@section('button_header')
    <h4 class="d-inline text-secondary-emphasis mt-1 ms-3 me-4">User Edit</h4>
@endsection

@section('content_dashboard')
<form class="mt-4" method="post" action="{{route('users.update', $user->id)}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <!-- user input -->
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline col-lg-6">
            <label class="form-label" for="">First Name</label>
            <input class="form-control" type="text" id="fname" name="first_name" required value="{{$user->user_first_name}}">
            <p class="errormessage" id="fnerror">&thinsp;</p>
        </div>
        <div class="form-outline col-lg-6">
            <label class="form-label" for="">Last Name</label>
            <input class="form-control" type="text" id="lname" name="last_name" required value="{{$user->user_last_name}}">
            <p class="errormessage" id="lnerror">&thinsp;</p>
        </div>
    </div>
    <div class="input mb-3">
        <label class="form-label" for="inputGroupFile01">Upload</label>
        <input type="file" name="photo" class="form-control" id="inputGroupFile01" value="{{$user->user_photo}}">
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline col-lg-6 ">
            <label class="form-label" for="">E-mail</label>
            <input class="form-control" type="email" id="email" name="email" required value="{{$user->email}}">
            <p class="errormessage" id="mailerror">&thinsp;</p>
        </div>
        <div class="form-outline col-lg-6">
            <label class="form-label" for="">Phone Number</label>
            <input class="form-control" type="number" id="phone" name="phone" required value="{{$user->phone}}">
            <p class="errormessage" id="phonerror">&thinsp;</p>
        </div>
    </div>



    <!-- Submit button -->
    <button type="submit" class="btn mypthirdbg btn-block mb-4" aria-disabled="true" >Save</button>

</form>

@endsection

