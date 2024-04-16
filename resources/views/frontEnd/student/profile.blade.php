@extends('frontEnd.master')
{{--@section('')
    class="active"
@endsection--}}
@section('title', 'My Profile')
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
                            <li class="breadcrumb-item text-white active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body shadow">
                        <nav class="navbar-expand-md">
                            <ul class="navbar-nav">
                                <li class="nav-link"><img src="../frontAssets/img/default.jpg" alt="Default Image" class="rounded-3" style="height: 150px; width: 150px" alt=""></li>
                                <li class="nav-link"><h3 class="mt-5 ms-5">{{Session::get('student_name')}}</h3></li>
                            </ul>
                            <div class="col-md-8 mx-auto">
                                <nav>
                                    <div class="nav nav-tabs justify-content-between border-0" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Profile</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">My Courses</button>
                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Purchase History</button>
                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Settings</button>
                                        <a href="#" class="mt-2" onclick="event.preventDefault(); document.getElementById('studentLogoutForm').submit()">Logout</a>
                                        <form action="{{ route('user-logout') }}" method="post" id="studentLogoutForm">
                                            @csrf
                                        </form>
                                    </div>
                                </nav>
                            </div>

                        </nav>
                    </div>
                    <div class="card card-body mt-5 shadow">
                        <nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
