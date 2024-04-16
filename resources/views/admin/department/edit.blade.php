@extends('admin.master')
{{--@section('')
    class="active"
@endsection--}}
@section('title', 'Edit Department')
@section('content')
    <section style="margin-bottom: 27vh">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 mx-auto">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h2 class="mb-4">Edit Department Form</h2>
                        <hr>
                        <h5 class="text-success text-center fw-bolder mt-2">{{ Session::get('success') ? Session::get('success') : '' }}</h5>
                        <form action="{{ route('departments.update', $department->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row mb-3">
                                <label for="department" class="col-sm-2 col-form-label">Department Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="dep_name" value="{{ $department->dep_name }}" id="department">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control" id="description" cols="30" rows="5">{{ $department->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control bg-dark mb-2"  name="image" accept="image/*">
                                    <img src="{{ asset($department->image) }}" class="rounded-2" style="width: 150px" alt="">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                <div class="col-md-9">
                                    <div class="form-check">
                                        <label for="publish" class="pe-5">  <input type="radio" class="form-check-input" id="publish" name="status" value="1" {{ $department->status == 1 ? 'checked' : '' }} checked/> Published</label>
                                        <label for="unpublish">             <input type="radio" class="form-check-input" id="unpublish" name="status" value="0" {{ $department->status == 0 ? 'checked' : '' }}/> Unpublished</label>
                                    </div>
                                </div>
                            </fieldset>
                            <button type="submit" class="btn btn-outline-primary text-white col-sm-12">Update Department</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
