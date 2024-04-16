@extends('admin.master')
{{--@section('')
    class="active"
@endsection--}}
@section('title', 'Manage Department')
@section('content')
    <section>
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h2 class="mb-4">Manage Department</h2>
                        <h5 class="text-primary text-center fw-bolder mt-2">{{ Session::get('success') ? Session::get('success') : '' }}</h5>
                        <table class="table table-bordered table-hover text-center">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($departments as $department)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $department->dep_name }}</td>
                                    <td>{{ $department->description }}</td>
                                    <td>
                                        <img src="{{ asset($department->image) }}" alt="" style="width: 80px; height: 80px">
                                    </td>
                                    <td>{{ $department->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="d-flex justify-content-center py-4">
                                        <a href="{{ route('departments.edit',$department->id) }}" class="btn btn-info rounded-3 my-2 me-3">Edit</a>
                                        <form action="{{ route('departments.destroy',$department->id) }}" method="post" onsubmit="return confirm('Do you want to Delete this!!')">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-primary rounded-3 my-2" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
