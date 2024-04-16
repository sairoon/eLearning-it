@extends('teacher.master')
{{--@section('')
    class="active"
@endsection--}}

@section('title', 'Manage Course')
@section('content')
    <section>
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h2 class="mb-4">Manage Course</h2>
                        <h5 class="text-primary text-center fw-bolder mt-2">{{ Session::get('success') ? Session::get('success') : '' }}</h5>
                        <table class="table table-bordered table-hover text-center">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Course Title</th>
                                <th scope="col">Lectures</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Image</th>
                                <th scope="col">Discounted Fee</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $course->course_title }}</td>
                                    <td>{{ $course->lecture }}</td>
                                    <td>{{ $course->course_duration }}</td>
                                    <td>
                                        <img src="{{ asset($course->image) }}" alt="" style="width: 80px; height: 80px">
                                    </td>
                                    <td>{{ $course->discounted_fee }}</td>
                                    <td>{{ $course->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="d-flex justify-content-center py-4">
                                        <a href="{{ $course->id }}" class="btn btn-warning rounded-3 my-2 me-3 table-dark" data-bs-target="#modalToggle1" data-bs-toggle="modal">Detail</a>
                                        <a href="{{ route('courses.edit',$course->id) }}" class="btn btn-info rounded-3 my-2 me-3">Edit</a>
                                        <form action="{{ route('courses.destroy',$course->id) }}" method="post" onsubmit="return confirm('Do you want to Delete this!!')">
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
    <section class="">
        <div class="modal fade" id="modalToggle1" aria-hidden="true" aria-labelledby="modalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content container bg-secondary">
                    <div class="modal-header">
                        <h4 class="title-color fw-bolder" id="modalToggleLabel">Course Detail</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered bg-dark ">
                            <tbody>
                            @foreach($courses as $course)
                            <tr>
                                <th>Instructor Name</th>
                                <td>{{--{{ $course->teacher_name }}--}}</td>
                            </tr>
                            <tr>
                                <th>Course Title</th>
                                <td>{{ $course->course_title }}</td>
                            </tr>
                            <tr>
                                <th>Lectures</th>
                                <td>{{ $course->lecture }} lecture</td>
                            </tr>
                            <tr>
                                <th>Course Duration</th>
                                <td>{{ $course->course_duration }} month</td>
                            </tr>
                            <tr>
                                <th>Short Description</th>
                                <td>{{ $course->short_description }}</td>
                            </tr>
                            <tr>
                                <th>Long Description</th>
                                <td>{{ $course->long_description }}</td>
                            </tr>
                            <tr>
                                <th>Course Level</th>
                                <td>
                                    @if($course->course_level == 1) Beginner @elseif($course->course_level == 2) Advanced @else Expert @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Course Fee</th>
                                <td>{{ $course->course_fee }}</td>
                            </tr>
                            <tr>
                                <th>Course Discount</th>
                                <td>{{ $course->course_discount }} %</td>
                            </tr>
                            <tr>
                                <th>Discounted Fee</th>
                                <td>{{ $course->discounted_fee }}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><img src="{{ $course->image }}" alt="" style="width: 80px; height: 80px"></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $course->status == 1 ? 'Published' : 'Unpublished' }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
    </section>
    {{--<script>
        function getUserDataById(id) {
            // Fetch the data from the server by ID.
            var data = {
                id: id
            };

            $.ajax({
                url: "/api/users/" + id,
                type: "GET",
                data: data,
                success: function(response) {
                    // Display the data in the modal.
                    $("#modalToggle1").find(".modal-body").html(response);
                }
            });
        }

        $(document).ready(function() {
            // When the button is clicked, fetch the data from the server by ID and display it in the modal.
            $("#modalToggle1").on("click", function() {
                var id = $(this).data("id");
                getUserDataById(id);
            });
        });
    </script>--}}
@endsection
