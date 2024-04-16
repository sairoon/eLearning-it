@extends('admin.master')
{{--@section('')
    class="active"
@endsection--}}
@section('title', 'Manage Teacher')
@section('content')
    <section>
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h2 class="mb-4">Manage Teacher</h2>
                        <h5 class="text-primary text-center fw-bolder mt-2">{{ Session::get('success') ? Session::get('success') : '' }}</h5>
                        <table class="table table-bordered table-hover text-center">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Department</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <th scope="row" class="py-4">{{ $loop->iteration }}</th>
                                    <td class="py-4">{{ $teacher->department->dep_name }}</td>
                                    <td class="py-4">{{ $teacher->teacher_name }}</td>
                                    <td class="py-4">{{ $teacher->email }}</td>
                                    <td class="py-4">{{ $teacher->mobile }}</td>
                                    <td>
                                        <img src="{{ asset($teacher->image) }}" alt="" style="width: 80px; height: 80px">
                                    </td>
                                    <td class="py-4">{{ $teacher->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="d-flex justify-content-center py-4">
                                        <a href="{{ route('teachers.edit',$teacher->id) }}" class="btn btn-info rounded-3 mt-2 me-3">Edit</a>
                                        <form action="{{ route('teachers.destroy',$teacher->id) }}" method="post" onsubmit="return confirm('Do you want to Delete this!!')">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-primary rounded-3 mt-2" value="Delete">
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
