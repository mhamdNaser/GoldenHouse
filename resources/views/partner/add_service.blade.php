@extends('layout.master')

@section('title', 'Add Service')


<div class="container mt-5">
    @section('content')
        <div class="col-lg-12 mt-5">
            <div class="card-group row p-5 g-2">
                <h2 class="fs-1 fw-bold mypimarytext mytextshadow mb-4 text-center">
                    Add New Service
                </h2>
                
                <form class="mt-4" method="post" action="{{route('register')}}" enctype="multipart/form-data">
                    @csrf

                    <!-- user input -->
                    <div class="row justify-content-center align-items-center mb-2">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="">Service Type</label>
                            <select class="form-select" aria-label="Register As" id="userttype" name="userttype">
                                <option selected disabled>Register As</option>
                                <option value="SVP">Partner</option>
                                <option value="STD">Students</option>
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center mb-2">
                        <div class="form-outline col-lg-6">
                            <label class="form-label" for="">First Name</label>
                            <input class="form-control" type="text" id="fname" name="first_name" required placeholder="First Name" onchange="checkfname()">
                            <p class="errormessage" id="fnerror">&thinsp;</p>
                        </div>
                        <div class="form-outline col-lg-6">
                            <label class="form-label" for="">Last Name</label>
                            <input class="form-control" type="text" id="lname" name="last_name" required placeholder="Last Name" onchange="checklname()">
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
                            <input class="form-control" type="email" id="email" name="email" required placeholder="E-mail" onchange="checkemail()">
                            <p class="errormessage" id="mailerror">&thinsp;</p>
                        </div>
                        <div class="form-outline col-lg-6">
                            <label class="form-label" for="">Phone Number</label>
                            <input class="form-control" type="number" id="phone" name="phone" required placeholder="phone number" onchange="checkphone()">
                            <p class="errormessage" id="phonerror">&thinsp;</p>
                        </div>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="">Password</label>
                        <input class="form-control" type="password" id="password" name="password" required placeholder="Password" onchange="checkpass()">
                        <p class="errormessage" id="passerror"></p>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="">Repeat Password</label>
                        <input class="form-control" type="password" id="conf-password" name="conf-password" required placeholder="Repeat Password" onchange="recheckpass()">
                        <p class="errormessage" id="repasserror">&thinsp;</p>
                    </div>



                    <!-- Submit button -->
                    <button type="submit" class="btn mypthirdbg btn-block mb-4" aria-disabled="true" >Register</button>

                </form>
            </div>
        </div>
    @endsection
</div>
