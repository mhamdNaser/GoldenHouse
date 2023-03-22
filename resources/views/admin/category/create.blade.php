@extends('admin.dashboard')
@section('categories_active', 'active')

@section('button_header')
    <h4 class="d-inline text-secondary-emphasis mt-1 ms-3 me-4">Create Category</h4>
@endsection

@section('content_dashboard')
<form class="mt-4" method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
    @csrf

    <!-- user input -->
    <div class="row align-items-center mb-2">
        <div class="form-outline">
            <label class="form-label" for="">Category Name</label>
            <input class="form-control" type="text" id="Category_Name" name="Category_Name" required placeholder="Category Name">
        </div>
    </div>
    <div class="row align-items-center mb-2">
        <div class="form-outline">
            <label class="form-label" for="">Category Description</label>
            <textarea class="form-control" type="text" id="Category_Description" rows="4" name="Category_Description" required placeholder="Category Description"></textarea>
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

