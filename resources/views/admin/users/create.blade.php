
@extends('admin.dashboard')
@section('users_active', 'active')

@section('button_header')
    <h4 class="d-inline text-secondary-emphasis mt-1 ms-3 me-4">Create User</h4>
@endsection

@section('content_dashboard')
<form class="mt-4" method="post" action="{{route('add')}}" enctype="multipart/form-data">
    @csrf

    <!-- user input -->
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline mb-4">
            <select class="form-select" aria-label="Register As" id="userttype" name="userttype">
                <option selected disabled>Add As</option>
                <option value="SVP">Partner</option>
                <option value="STD">Students</option>
            </select>
        </div>
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline col-lg-6">
            <label class="form-label" for="">First Name</label>
            <input class="form-control" type="text" id="fname" name="first_name" required placeholder="First Name">
            <p class="errormessage" id="fnerror">&thinsp;</p>
        </div>
        <div class="form-outline col-lg-6">
            <label class="form-label" for="">Last Name</label>
            <input class="form-control" type="text" id="lname" name="last_name" required placeholder="Last Name">
            <p class="errormessage" id="lnerror">&thinsp;</p>
        </div>
    </div>
    <div class="input mb-3">
        <label class="form-label" for="inputGroupFile01">Upload</label>
        <input type="file" name="photo" class="form-control" id="inputGroupFile01">
    </div>
    <div class="row justify-content-center align-items-center mb-2">
        <div class="form-outline col-lg-6 ">
            <label class="form-label" for="">E-mail</label>
            <input class="form-control" type="email" id="email" name="email" required placeholder="E-mail">
            <p class="errormessage" id="mailerror">&thinsp;</p>
        </div>
        <div class="form-outline col-lg-6">
            <label class="form-label" for="">Phone Number</label>
            <input class="form-control" type="number" id="phone" name="phone" required placeholder="phone number">
            <p class="errormessage" id="phonerror">&thinsp;</p>
        </div>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="">Password</label>
        <input class="form-control" type="password" id="password" name="password" required placeholder="Password">
        <p class="errormessage" id="passerror"></p>
    </div>



    <!-- Submit button -->
    <button type="submit" class="btn mypthirdbg btn-block mb-4" aria-disabled="true" >Save</button>

</form>

@endsection

