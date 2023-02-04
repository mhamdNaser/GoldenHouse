@extends('admin.dashboard')
@section('users_active', 'active')

@section('button_header')
    <div class="row">
        <div class="col">
            <a href=""><button type="submit" class="btn mypthirdbg" aria-disabled="true" >Add User</button></a>
        </div>
    </div>
@endsection

@section('content_dashboard')
<div class=" table-responsive">
<table class="table align-middle text-center">
    <thead class="table-dark">
        <tr>
            <th>User Image</th>
            <th>User Name</th>
            <th>User Type</th>
            <th>User E-mail</th>
            <th>User Phone</th>
            <th>Date registeration</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>
                <img src="{{asset('storage/userimage/'.$user->user_photo)}}" alt="" width="80px">
            </td>
            <td>
                <span class="fw-bolder">{{$user->user_first_name}}</span> / {{$user->user_last_name}}
            </td>
            <td>
                {{$user->userttype}}
            </td>
            <td>
                {{$user->email }}
            </td>
            <td>
                {{$user->phone }}
            </td>
            <td>{{$user->created_at}}</td>
            <td>
                <div class="row g-2">
                    <form action="{{route('users.destroy',$user->id)}}" method="post" class="col-lg-6">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <div class="col-lg-6">
                        <a href="" class="btn btn-warning">edit </a>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection