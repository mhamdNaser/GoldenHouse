@extends('admin.dashboard')
@section('message_active', 'active')
@section('title_header', 'All Message :')

@section('button_header')
    <h3>All Message</h3>
@endsection

@section('content_dashboard')
<div class="table-responsive">
<table class="table align-middle text-center">
    <thead class="table-dark">
        <tr>
            <th>The Sender Email</th>
            <th>Subject</th>
            <th>Message Content</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($massage as $item)
        <tr>
          <td class="fw-bolder">{{$item->email}}</td>
          <td>{{$item->title_massage}}</td>
          <td>{{$item->content_massage}}</td>
          <td>
            <div class="row g-2">
                <form action="{{ route('massage.destroy', $item->id) }}" method="post" class="col-lg-6">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>
            </div>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
