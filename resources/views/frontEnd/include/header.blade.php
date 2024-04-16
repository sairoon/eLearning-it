<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('frontAssets') }}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontAssets') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('frontAssets') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('bootstrap') }}/css/bootstrap.min.css" rel="stylesheet"> {{--bootstrap-5--}}
    <link href="{{ asset('frontAssets') }}/css/bootstrap.min.css" rel="stylesheet"> {{--bootstrap-4--}}

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontAssets') }}/css/style.css" rel="stylesheet">
</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
    </a>
{{--    <div class="vr me-2"></div>--}}
    <div class="dropdown">
        <button class="btn border-0 {{--dropdown-toggle--}} fw-bolder text-primary" type="button" id="department-dropdown" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-th-large me-2"></i>
            All Departments
        </button>
        <ul class="dropdown-menu border-0" aria-labelledby="department-dropdown">
            @foreach($department as $department)
                <li><a class="dropdown-item" href="{{ route('course', ['id' => $department->id]) }}">{{ $department->dep_name }}</a></li>
            @endforeach
        </ul>
    </div>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        {{--<ul class="navbar-nav ms-auto p-4 p-lg-0">
            <li class="@yield('home')"><a href="{{ route('home') }}" class="nav-item nav-link active">Home</a></li>
            <li class="@yield('about')"><a href="{{ route('about') }}" class="nav-item nav-link">About</a></li>
            <li class="@yield('course')"><a href="{{ route('course') }}" class="nav-item nav-link">Courses</a></li>
            <li class="@yield('contact')"><a href="{{ route('contact-us') }}" class="nav-item nav-link">Contact us</a></li>
        </ul>--}}
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
{{--            <a href="{{ route('course') }}" class="nav-item nav-link">Courses</a>--}}
            <a href="{{ route('contact-us') }}" class="nav-item nav-link">Contact us</a>
        </div>
        @if(Session::get('student_id'))
            <div class="nav-item dropdown">
                <a href="{{ route('user-profile') }}" class="nav-link btn btn-primary py-4 px-lg-5 d-none d-lg-block">{{Session::get('student_name')}}</a>
            </div>
        @else
            <a href="{{ route('user-login') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login Now<i class="fa fa-arrow-right ms-3"></i></a>
        @endif
    </div>
</nav>
<!-- Navbar End -->

