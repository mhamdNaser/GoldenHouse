@extends('layout.master')

@section('title', 'login')

<div class="mt-4">
    @section('content')
    <!-- Contact-->
    <div class="row pt-4 ps-2 pe-2 d-flex " style="background-image: url({{url('/images/contact-bg.jpg')}}); background-size: cover; background-position: center center;">
        <div class="col-lg-6 p-3">
            <div class="card-body py-5 px-md-5 myopacity rounded-3">
                <form>
                    <!-- message input -->
                    <div class="row justify-content-center align-items-center g-2">
                        <div class="form-outline col-lg-6 mb-4">
                            <label class="form-label" for="">First Name</label>
                            <input class="form-control" type="text" id="fname" name="first_name" required placeholder="First Name" onchange="checkfname()">
                        </div>

                        <div class="form-outline col-lg-6 mb-4">
                            <label class="form-label" for="">Last Name</label>
                            <input class="form-control" type="text" id="lname" name="last_name" required placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="">E-mail</label>
                        <input class="form-control" type="email" id="email" name="email" required placeholder="E-mail">
                        <p class="errormessage" id="mailerror"></p>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="">Subject</label>
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                    </div>
                    <button type="button" class="btn mypthirdbg btn-block mb-4">Send</button>

                </form>

            </div>
        </div>
        <div class="col-lg-6 text-center p-3 mt-4">
            <h2 class="text-white fs-1 fw-bolder">Contact Us</h2>
        </div>
    </div>

    <script src="{{url('js/script.js')}}"></script>
  <!-- Section: Design Block -->
@endsection
</div>
