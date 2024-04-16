@extends('frontEnd.master')
{{--@section('course')
    class="active"
@endsection--}}
@section('title', 'Our Courses')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Course</h6>
                <h1 class="mb-5">{{ $departments->dep_name }}</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($courses as $course)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item bg-light shadow">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset($course->image) }}" style="width: 100%; height: 260px" alt="">
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="{{ route('detail-course' ,['course' => $course->id]) }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 rounded-3">Read More</a>
                                    {{--                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>--}}
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0 d" style="height: 210px">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <ins class="mb-0 fs-3 fw-bolder link-underline-light">৳ {{ $course->discounted_fee }} &nbsp;</ins>
                                        <del class="mb-0">৳ {{ $course->course_fee }}</del>
                                    </div>
                                    <div>
                                        <a href="" class="fw-bolder fs-5 text-success">{{ $course->course_discount }}%OFF</a>
                                    </div>
                                </div>
                                {{--                            <a href="{{ route('detail-course') }}">--}}
                                <h4 class="mb-4">{{ $course->course_title }}</h4>
                                <h6 class="mb-3">@if($course->course_level == 1) Beginner @elseif($course->course_level == 2) Advanced @else Expert @endif course</h6>
{{--                                </a>--}}
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-table text-primary me-2"></i>{{ $course->lecture }} lecture</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>{{ $course->course_duration }} month</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user-tie text-primary me-2"></i> {{ $teachers->teacher_name }}</small>

                            </div>
                        </div>
                    </div>
                @endforeach
                {{--<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('frontAssets') }}/img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <a href="">
                                <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                            </a>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
    <!-- Courses End -->

@endsection
