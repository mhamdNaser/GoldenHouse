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
    <div class="col-lg-2 vh-100 d-none d-lg-block fixed-top mypseconbg">
        @include('admin.header')
    </div>
    <div class="d-block d-lg-none fixed-top mypseconbg">
        @include('admin.TopNav')
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 vh-100 d-none d-lg-block  mypseconbg">
            </div>
            <div class="col-lg-10">
                <div class="container">
                @yield('content_dashboard')
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
