@extends('admin.dashboard')
@section('categories_active', 'active')

@section('button_header')
    <h4 class="d-inline text-secondary-emphasis mt-1 ms-3 me-4">Edit Category</h4>
@endsection

@section('content_dashboard')
<form class="mt-4" method="post" action="{{route('category.update', $category->id)}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="container text-center">
        <img src="{{asset('storage/categoryImg/'.$category->Category_Image)}}" class="rounded-circle" alt="" width="160px">
    </div>
    <!-- user input -->
    <div class="row align-items-center mb-2">
        <div class="form-outline">
            <label class="form-label" for="">Category Name</label>
            <input class="form-control" type="text" id="Category_Name" name="Category_Name" required placeholder="Category Name" value="{{$category->Category_Name}}">
        </div>
    </div>
    <div class="row align-items-center mb-2">
        <div class="form-outline">
            <label class="form-label" for="">Category Description</label>
            <input class="form-control" type="text" id="Category_Description" name="Category_Description" required placeholder="Category Description" value="{{$category->Category_Description}}">
        </div>
    </div>
    <div class="input mb-3">
        <label class="form-label" for="inputGroupFile01">Category Image</label>
        <input type="file" name="Category_Image" class="form-control" id="inputGroupFile01">
    </div>
    <!-- Submit button -->
    <button type="submit" class="btn mypthirdbg btn-block mb-4" aria-disabled="true" >Submit</button>

</form>
@endsection

