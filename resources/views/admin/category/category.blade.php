@extends('admin.dashboard')
@section('categories_active', 'active')
@section('title_header', 'All Category :')

@section('button_header')
    <a href="{{route('category.create')}}"><button type="submit" class="btn mypthirdbg" aria-disabled="true" >Add Category</button></a>
@endsection

@section('content_dashboard')
<div class=" table-responsive">
<table class="table align-middle text-center">
    <thead class="table-dark">
        <tr>
            <th>Category Name</th>
            <th>Category image</th>
            <th>Category Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $item)
        <tr>
          <td class="fw-bolder">{{$item->Category_Name}}</td>
          <td><img src="{{asset('storage/categoryImg/'.$item->Category_Image)}}" class="rounded-circle" alt="" width="80px"></td>
          <td>{{$item->Category_Description}}</td>
          <td>
            <div class="row g-2">
                <form action="{{ route('category.destroy', $item->id) }}" method="post" class="col-lg-6">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
    
                </form>
                <div class="col-lg-6">
                    <a href="{{route('category.edit',$item->id)}}" class="btn btn-warning">edit </a>
                </div>
            </div>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection