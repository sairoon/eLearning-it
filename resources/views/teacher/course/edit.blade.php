@extends('teacher.master')
{{--@section('')
    class="active"
@endsection--}}
@section('title', 'Edit Course')
@section('content')
    <section>
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 mx-auto">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h2 class="mb-4">Create Course Form</h2>
                        <hr>
                        <h5 class="text-success text-center fw-bolder mt-2">{{ Session::get('success') ? Session::get('success') : '' }}</h5>
                        <form action="{{ route('courses.update', $course->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Course Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="course_title" value="{{ $course->course_title }}" id="title" placeholder="Enter Course Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lectures" class="col-sm-2 col-form-label">Lectures</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="lecture" value="{{ $course->lecture }}" id="lectures" placeholder="Enter Lectures Amount">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="duration" class="col-sm-2 col-form-label">Course Duration</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="course_duration" value="{{ $course->course_duration }}" id="duration" placeholder="Enter Course Duration (Month)">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="shortDescription" class="col-sm-2 col-form-label">Short Description</label>
                                <div class="col-sm-10">
                                    <textarea name="short_description" class="form-control" id="shortDescription" cols="30" rows="2" placeholder="Enter Short Description">{{ $course->short_description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="longDescription" class="col-sm-2 col-form-label">Long Description</label>
                                <div class="col-sm-10">
                                    <textarea name="long_description" class="form-control" id="longDescription" cols="30" rows="5" placeholder="Enter Full Description">{{ $course->long_description }}</textarea>
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Course Level</legend>
                                <div class="col-md-9">
                                    <div class="form-check">
                                        <label for="beginner" class="pe-5"><input type="radio" class="form-check-input" id="beginner" name="course_level" value="1" {{ $course->course_level == 1 ? 'checked' : '' }}/> Beginner</label>
                                        <label for="advance" class="pe-5"><input type="radio" class="form-check-input" id="advance" name="course_level" value="2" {{ $course->course_level == 2 ? 'checked' : '' }}/> Advanced</label>
                                        <label for="expert"><input type="radio" class="form-check-input" id="expert" name="course_level" value="3" {{ $course->course_level == 3 ? 'checked' : '' }}/> Expert</label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <label for="fee" class="col-sm-2 col-form-label">Course Fee</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" onkeyup="discountPrice();" name="course_fee" value="{{ $course->course_fee }}" id="fee" placeholder="Enter Course Fee">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="discount" class="col-sm-2 col-form-label">Course Discount %</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" onkeyup="discountPrice();" name="course_discount" value="{{ $course->course_discount }}" id="discount" placeholder="Enter Course Discount in Percent %">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="discountedFee" class="col-sm-2 col-form-label">Course Discounted Fee</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control text-bg-dark" name="discounted_fee" value="{{ $course->discounted_fee }}" id="total" placeholder="" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control bg-dark"  name="image" accept="image/*">
                                    <img src="{{ asset($course->image) }}" class="rounded-2 mt-3" style="width: 150px" alt="">
                                </div>
                            </div>
                            <fieldset class="row mb-3" hidden="hidden">
                                <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                <div class="col-md-9">
                                    <div class="form-check">
                                        <label for="publish" class="pe-5"><input type="radio" class="form-check-input" id="publish" name="status" value="1"/> Published</label>
                                        <label for="unpublish"><input type="radio" class="form-check-input" id="unpublish" name="status" value="0" checked/> Unpublished</label>
                                    </div>
                                </div>
                            </fieldset>
                            <button type="submit" class="btn btn-outline-primary text-white col-sm-12">Create Course</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <script>
        function discountPrice(){
            var numVal1 = document.getElementById("fee").value;
            var numVal2 = document.getElementById("discount").value;
            if(numVal1 > -1) {
                if (numVal1 == 0 || numVal2 == 100) {
                    document.getElementById("total").value = "FREE";
                } else if (numVal2 >= 0 && numVal2 <= 100) {
                    document.getElementById("total").value = numVal1-numVal1*numVal2/100;
                } else {
                    alert("Sorry!! Discount isn't possible")
                }
            } else {
                alert("Negative price isn't possible")
            }
        }
    </script>
@endsection
