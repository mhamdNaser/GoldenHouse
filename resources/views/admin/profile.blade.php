@extends('admin.dashboard');
@section('profile_active', 'active');

@section('button_header')
    <a href="/"><button type="submit" class="btn mypthirdbg" aria-disabled="true" >Save</button></a>
@endsection


@section('content_dashboard')

  <div class="row">
    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="{{asset('/storage/userimage/'. Auth::user()->user_photo)}}" class="rounded-circle img-fluid" style="width: 150px;" alt="Auth Image">
                <h5 class="my-3 fw-bolder">
                    @if (Auth::user()->userttype === 'ADM')
                    <i class="fa fa-vcard text-warning"></i>  {{ strtoupper(Auth::user()->userttype)}}
                    @else
                    <i class="fa fa-vcard text-warning"></i>  {{ strtoupper(Auth::user()->userttype)}}
                    @endif
                </h5>
                <p class="text-black-50 mb-1 fs-4 fw-bolder">{{ strtoupper(Auth::user()->user_first_name)}} {{ strtoupper(Auth::user()->user_last_name)}}</p>
              </div>
            </div>
            <div class="card mb-4">
              <div class="card-body text-center">
                <div class="row justify-content-center">
                  @foreach ($pios as $pio)
                    @if ( Auth::user()->id === $pio->users_id)
                        <span class="col-lg-10 text-center py-2" id="havePio">{{$pio->pio_text}}</span>
                    @endif
                  @endforeach
                </div>
                <div class="row justify-content-center" id="addPio">
                    <div class="col-lg-12">
                        Add Pio
                        <button class="border-0 bg-body text-warning fa fa-edit" onclick="toggleForm()"></button>
                        <form action="{{route('profile.store')}}" method="post" id="pioForm" style="display: none">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="row mb-2">
                                        <input name="pioUser" style="display: none" value="{{ Auth::user()->id}}">
                                        <textarea class="form-control" name="pio_text" id="" cols="50" rows="5" placeholder="write pio"></textarea>
                                    </div>
                                    <div class="row">
                                        <button class="form-control btn btn-outline-warning" type="submit">save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <p class="mb-0">https://mdbootstrap.com</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                <p class="mb-0">@mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                <p class="mb-0">mdbootstrap</p>
                </li>
            </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
      <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Full Name</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">Johnatan Smith</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Email</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">example@example.com</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Phone</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">(097) 234-5678</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Mobile</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">(098) 765-4321</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Address</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card mb-4 mb-md-0">
            <div class="card-body">
              <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
              </p>
              <p class="mb-1" style="font-size: .77rem;">Web Design</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
              <div class="progress rounded mb-2" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4 mb-md-0">
            <div class="card-body">
              <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
              </p>
              <p class="mb-1" style="font-size: .77rem;">Web Design</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
              <div class="progress rounded mb-2" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

<script src="{{url('js/script.js')}}"></script>
