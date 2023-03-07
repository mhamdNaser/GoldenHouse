@extends('admin.dashboard')
@section('comment_active', 'active')
@section('title_header', 'All comments :')

@section('content_dashboard')
<div class=" table-responsive">
<table class="table align-middle text-center">
    <thead class="table-dark">
        <tr>
            <th>User Name</th>
            <th>Comment text</th>
            <th>Comment date</th>
            <th>Post Contant</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comments as $item)
        <tr>
            <td class="d-flex align-items-center">
                <div class="img">
                    <img src="{{asset('/storage/userimage/'. $item["user_photo"])}}" class="" alt="" width="60px"></div>
                <div class="pt-3 ms-2 email text-start">
                    <span>{{$item['user_fname']}}</span><br>
                    <span>{{$item['user_lname']}}</span>
                </div>
            </td>
            <td class="">{{$item['comment_text']}}</td>
            <td class="text-black-50">{{$item['comment_date']}}</td>
            <td class="">{{$item['post_text']}}</td>
            <td>
                <form action="" method="post" class="col-lg-6">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection