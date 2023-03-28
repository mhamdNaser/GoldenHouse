<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


@extends('admin.dashboard')
@section('Dash_active', 'active')

@section('button_header')
    <div></div>
@endsection


@section('content_dashboard')
    <div class="row justify-content-center p-2">
        <div class="col-lg-12">
            <div class="row gx-3 py-5 px-5 justify-content-between">
                <div class="col-lg-3 col-sm-6 bg-success-subtle rounded-3 test-success">
                    <div class="text-center">
                        <i class="fa fa-users rounded-circle border border-light bg-success-subtle text-success fs-1 p-3"
                            style="margin-top: -10%"></i>
                    </div>
                    <div class="mb-3 py-1 px-3">
                        <div class="row text-success mt-1">
                            <div class="col-lg-5 text-start">All Users</div>
                            <div class="col-lg-5 text-start">
                                <hr />
                            </div>
                            <div class="col-lg-2 text-success fw-bolder text-end">{{ App\Models\User::count() }}</div>
                        </div>
                        <div class="text-success border-success-subtle border-top border-start p-1">
                            <div class="container text-start d-flex justify-content-around">Admin Users &nbsp; :
                                <span class="">
                                    {{ App\Models\User::where('userttype', 'ADM')->count() }}
                                </span>
                            </div>
                            <div class="container text-start d-flex justify-content-around">Partner Users&nbsp; :
                                <span class="">
                                    {{ App\Models\User::where('userttype', 'SVP')->count() }}
                                </span>
                            </div>
                            <div class="container text-start d-flex justify-content-around">Student Users :
                                <span class="">
                                    {{ App\Models\User::where('userttype', 'STD')->count() }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 bg-primary-subtle rounded-3 test-primary">
                    <div class="text-center">
                        <i class="fa fa-home rounded-circle border border-light bg-primary-subtle text-primary fs-1 p-3"
                            style="margin-top: -10%"></i>
                    </div>
                    <div class="mb-3 py-1 px-3">
                        <div class="row text-primary mt-1">
                            <div class="col-lg-5 text-start">All Service</div>
                            <div class="col-lg-5 text-start">
                                <hr />
                            </div>
                            <div class="col-lg-2 text-primary fw-bolder text-end">
                                {{ App\Models\HouseService::count() + App\Models\DeliveryService::count() + App\Models\CleanService::count() }}
                            </div>
                        </div>
                        <div class="text-primary border-primary-subtle border-top border-start p-1">
                            <div class="container text-start d-flex justify-content-around">Housing service&nbsp; :
                                <span class="">
                                    {{ App\Models\HouseService::count() }}
                                </span>
                            </div>
                            <div class="container text-start d-flex justify-content-around">Delivery service &nbsp;:
                                <span class="">
                                    {{ App\Models\DeliveryService::count() }}
                                </span>
                            </div>
                            <div class="container text-start d-flex justify-content-around">Clean service
                                &nbsp;&nbsp;&nbsp;&nbsp; :
                                <span class="">
                                    {{ App\Models\CleanService::count() }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 bg-warning-subtle rounded-3 test-warning">
                    <div class="text-center">
                        <i class="fa fa-comments rounded-circle border border-light bg-warning-subtle text-warning fs-1 p-3"
                            style="margin-top: -10%"></i>
                    </div>
                    <div class="mb-3 py-1 px-3">
                        <div class="row text-warning mt-1">
                            <div class="col-lg-5 text-start">Blog Content</div>
                            <div class="col-lg-5 text-start">
                                <hr />
                            </div>
                            <div class="col-lg-2 text-warning fw-bolder text-end"></div>
                        </div>
                        <div class="text-warning border-warning-subtle border-top border-start p-1">
                            <div class="container text-start d-flex justify-content-around">Posts
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                                <span class="">
                                    {{ App\Models\post::count() }}
                                </span>
                            </div>
                            <div class="container text-start d-flex justify-content-around">Comments &nbsp;:
                                <span class="">
                                    {{ App\Models\comment::count() }}
                                </span>
                            </div>
                            <div class="container text-start d-flex justify-content-around">Likes
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                                <span class="">
                                    {{ App\Models\like::count() }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gap-4 py-5 justify-content-center">
                <div class="col-lg-3 border">
                    <h3 class="mt-5 ms-1">Service Category</h3>
                    <div class="row ms-4 me-4">
                        @foreach ($category as $cat)
                            <div class="col-lg-3 p-2 ">{{ $cat->Category_Name}}</div>
                            <div class="col-lg-6 mt-2"><hr></div>
                            @if ( $cat->id == 1 )
                                <div class="col-lg-2 mt-2 align-items-center">{{ App\Models\HouseService::count() }}</div>
                            @elseif( $cat->id == 2 )
                                <div class="col-lg-2 mt-2 align-items-center">{{ App\Models\FurnitureService::count() }}</div>
                            @elseif( $cat->id == 3 )
                                <div class="col-lg-2 mt-2 align-items-center">{{ App\Models\CleanService::count() }}</div>
                            @elseif( $cat->id == 4 )
                                <div class="col-lg-2 mt-2 align-items-center">{{ App\Models\DeliveryService::count() }}</div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8 border">
                    <h3 class="mt-5 ms-5">User Registeration In Site</h3>
                    <script>
                        // {!! $chart->script() !!}
                        {!! $chart->container() !!}
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
