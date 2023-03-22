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
    <div class="row justify-content-center">
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
                            <div class="container text-start d-flex justify-content-around">Admin Users :
                                <span class="">
                                    {{ App\Models\User::where('userttype', 'ADM')->count() }}
                                </span>
                            </div>
                            <div class="container text-start d-flex justify-content-around">Partner Users :
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
                            <div class="container text-start d-flex justify-content-around">Admin Users :
                                <span class="">
                                    {{ App\Models\User::where('userttype', 'ADM')->count() }}
                                </span>
                            </div>
                            <div class="container text-start d-flex justify-content-around">Partner Users :
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
                            <div class="container text-start d-flex justify-content-around">Admin Users :
                                <span class="">
                                    {{ App\Models\User::where('userttype', 'ADM')->count() }}
                                </span>
                            </div>
                            <div class="container text-start d-flex justify-content-around">Partner Users :
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
            </div>
        </div>
    </div>
@endsection
