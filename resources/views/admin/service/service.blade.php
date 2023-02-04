@extends('admin.dashboard')
@section('service_active', 'active')

@section('button_header')
    <div class="row">
        <div class="col">
            <a href="{{route('service.create')}}"><button type="submit" class="btn mypthirdbg" aria-disabled="true" >Add Category</button></a>
        </div>
        <div class="col">
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected disabled>Price</option>
                @foreach ($category as $item)
                    <option class=" text-dark" value="{{$item->id}}">{{$item->Category_Name}}</option>
                @endforeach
            </select>
        </div>
    </div>
@endsection

@section('content_dashboard')
<div class=" table-responsive">
<table class="table align-middle text-center">
    <thead class="table-dark">
        <tr>
            <th>Service Name</th>
            <th>Service image</th>
            <th>Service Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($category as $item) --}}
        <tr>
          <td class="fw-bolder"></td>
          <td><img src="" class="rounded-circle" alt="" width="80px"></td>
          <td></td>
          <td>
            <div class="row g-2">
                <form action="" method="post" class="col-lg-6">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
    
                </form>
                <div class="col-lg-6">
                    <a href="{{route('service.edit',$item->id)}}" class="btn btn-warning">edit </a>
                </div>
            </div>
          </td>
        </tr>
        {{-- @endforeach --}}
    </tbody>
  </table>
</div>
@endsection