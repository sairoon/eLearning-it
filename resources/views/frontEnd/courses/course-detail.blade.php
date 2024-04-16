@extends('frontEnd.master')
{{--@section('')
    class="active"
@endsection--}}
@section('title', 'Course Detail')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Course Detail</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Course Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="card card-body border-0">

                        <span class="py-3" title="Department Name">{{ $departments->dep_name }}</span>
                        <h4 class="py-2 fw-bolder title-color" title="Course Name">{{ $courses->course_title }}</h4>
                        <p>{{ $courses->short_description }}</p>
                        <div class="trainer-info">
{{--                            <img src="{{ asset($teachers->image) }}" class="trainer-img" alt="">--}}
                            <h6>{{$teachers->teacher_name}}</h6>
                            <div class="vr"></div>
                            <h6>Last Updated: July 21, 2021</h6>
                        </div>
                    </div>
{{--                    tab start--}}
                    <div class="card mt-5 border-0">
                        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description-tab-pane"
                                        type="button" role="tab" aria-controls="description-tab-pane" aria-selected="true">Description</button>
                            </li>
                            {{--<li class="nav-item" role="presentation">
                                <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum-tab-pane"
                                        type="button" role="tab" aria-controls="curriculum-tab-pane" aria-selected="false">Curriculum</button>
                            </li>--}}
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="instructor-tab" data-bs-toggle="tab" data-bs-target="#instructor-tab-pane"
                                        type="button" role="tab" aria-controls="instructor-tab-pane" aria-selected="false">Instructor</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review-tab-pane"
                                        type="button" role="tab" aria-controls="review-tab-pane" aria-selected="false">Review</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description-tab-pane" role="tabpanel" aria-labelledby="description-tab" tabindex="0">{{ $courses->long_description }}</div>
                            <div class="tab-pane fade" id="curriculum-tab-pane" role="tabpanel" aria-labelledby="curriculum-tab" tabindex="0">... this is curriculum tab</div>
                            <div class="tab-pane fade" id="instructor-tab-pane" role="tabpanel" aria-labelledby="instructor-tab" tabindex="0">... this is trainer tab</div>
                            <div class="tab-pane fade" id="review-tab-pane" role="tabpanel" aria-labelledby="review-tab" tabindex="0">... this is review tab</div>
                        </div>
                    </div>
{{--                    tab end--}}
                </div>

                <div class="col-md-4 ms-auto">
                    <div class="card card-body shadow border-0">
                        <div class="d-flex align-items-center justify-content-between px-4 my-3">
                            <div class="course-single-price">
                                <ins class="text-primary fw-bolder fs-4 link-underline-light">৳ {{ $courses->discounted_fee }}</ins> <del>{{ $courses->course_fee }}</del>
                            </div>
                            <span class="">{{ $courses->course_discount }} off</span>
                        </div>
                        <a href="" class="btn btn-info rounded-3 text-white py-3 fw-bolder fs-5 my-3 mx-4">Enroll</a>
                        <div class="px-4">
                            <div class="py-1 mt-3 d-flex ">
                                <div class="me-auto fw-bolder"><i class="fa fa-user text-primary me-2"></i> Instructor :</div>
                                <div class="ms-auto">{{$teachers->teacher_name}}</div>
                            </div>
                            <hr>
                            <div class="py-1 d-flex ">
                                <div class="me-auto fw-bolder"><i class="fa fa-graduation-cap text-primary me-2" aria-hidden="true"></i>Level :</div>
                                <div class="ms-auto">
                                    @if($courses->course_level == 1) Beginner @elseif($courses->course_level == 2) Advanced @else Expert @endif
                                </div>
                            </div>
                            <hr>
                            <div class="py-1 d-flex ">
                                <div class="me-auto fw-bolder"><i class="fa fa-book text-primary me-2"></i> Lecture :</div>
                                <div class="ms-auto">{{ $courses->lecture }}</div>
                            </div>
                            <hr>
                            <div class="py-1 d-flex ">
                                <div class="me-auto fw-bolder"><i class="fa fa-clock text-primary me-2"></i> Duration :</div>
                                <div class="ms-auto">{{ $courses->course_duration }} months</div>
                            </div>
                            <hr>
                            {{--<div class="py-1 d-flex ">
                                <div class="me-auto fw-bolder"><i class="fa fa-user-friends text-primary me-2"></i> Enrolled :</div>
                                <div class="ms-auto">600 students</div>
                            </div>--}}
                        </div>
                        <div class="px-4">
                            <h4 class="my-3">Course Includes</h4>
                            <div class="mb-2"><i class="fa fa-check-circle text-primary me-2" aria-hidden="true"></i> Full Lifetime Access</div>
                            <div class="mb-2"><i class="fa fa-check-circle text-primary me-2" aria-hidden="true"></i> 35+ Downloadable Resources</div>
                            <div class="mb-2"><i class="fa fa-check-circle text-primary me-2" aria-hidden="true"></i> Certificate Of Completion</div>
                            <div class="mb-2"><i class="fa fa-check-circle text-primary me-2" aria-hidden="true"></i> Free Trial 7 Days</div>
                            <div class="mb-2"><i class="fa fa-check-circle text-primary me-2" aria-hidden="true"></i> 15 Days Money Back Guarantee</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



       {{-- <div>
            <form action="" method="post">
                @csrf
                @if(Session::get('student_id'))
                    <input type="hidden" value="{{Session::get('student_id')}}" name="student_id">

                @else

                    <div class="">
                        <label for="" class="py-2">Email</label>
                        <input type="email" class="form-control mb-3" name="email" required placeholder="Enter your Email">
                        <label for="" class="py-2">Password</label>
                        <input type="password" class="form-control mb-2" name="password" required placeholder="Enter your Password">
                    </div>

                @endif

                <div class="mx-auto col-sm-12">
                    <button type="submit"  class="btn btn-info col-sm-12 rounded-2 text-white mt-2 mb-4 pt-3 fs-4 text-uppercase">Register Now</button>

                </div>
            </form>
        </div>--}}

    </section>
@endsection


{{--
public function enroll()
{
    if(Session::get('student_id'){

    }
    else{

        student create
    }
    $enrollment = Enrollment::where('user_id', $request->user()->id)
        ->where('course_id', $course->id)
        ->first();

    if ($enrollment) {
        return redirect()->back()->with('error', 'You are already enrolled in this course.');
    }

    $enrollment = new Enrollment();
    $enrollment->user_id = $request->user()->id;
    $enrollment->course_id = $course->id;
    $enrollment->save();

    return redirect()->back()->with('success', 'You have successfully enrolled in the course.');
}
--}}
