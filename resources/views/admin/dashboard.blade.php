<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- icon link --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- bootstrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('css/main.css')}}">

    <title>@yield('title')</title>
</head>
<body class="vh-100">
    <div class="vh-100 d-none d-lg-block fixed-top mypseconbg" style="width: 70px">
        @include('admin.header')
    </div>
    <div class="d-block d-lg-none mypseconbg">
        @include('admin.TopNav')
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="vh-100 d-none d-lg-block  mypseconbg" style="width: 70px">
            </div>
            <div class="col-lg-11">
                <div class="justify-content-center">
                    <div class="mt-5 myboxshadow g-2 ">
                        <div class="bg-light sticky-top p-3 shadow">
                            @yield('button_header')
                        </div>
                        <div class="justify-content-center g-2 bg-white p-4">
                            @yield('content_dashboard')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>