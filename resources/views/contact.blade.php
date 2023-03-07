@extends('layout.master')

@section('title', 'Contact')

<div class="mt-4 pt-5">
    @section('content')
    <!-- Contact-->
    <div class="row pt-4 ps-2 pe-2" style="background-image: url({{url('/images/contact-bg.jpg')}}); background-size: cover; background-position: center center;">
        <div class="col-lg-6 p-3">
            <div class="card-body py-5 px-md-5 myopacity rounded-3">
                <form method="post" action="{{route('contact')}}" enctype="multipart/form-data">
                    @csrf

                    <!-- message input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="">E-mail</label>
                        <input class="form-control" type="email" id="email" name="email" required placeholder="E-mail">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="">Massage Title</label>
                        <input class="form-control" type="text"  name="massage_title" required placeholder="Tilte">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="">Massage Content</label>
                        <textarea class="form-control" name="message_content" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                    </div>
                    <button type="submit" class="btn mypthirdbg btn-block mb-4">Send</button>
                </form>

            </div>
        </div>
       
    </div>

    <script src="{{url('js/script.js')}}"></script>
  <!-- Section: Design Block -->
@endsection
</div>
