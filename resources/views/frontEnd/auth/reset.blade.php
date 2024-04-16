@extends('frontEnd.master')
{{--@section('')
    class="active"
@endsection--}}
@section('title', 'Reset Password')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Reset Password</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Reset Password</li>
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
                <div class="col-md-6 mx-auto">
                    <div class="card card-body shadow border-0">
                        <h3 class="title-color fw-bolder mx-auto mt-3">Reset your eLearning Password</h3>
                        <hr>
                        <div class="px-3">
                            <label for="" class="py-2">Email</label>
                            <input type="email" class="form-control mb-3" placeholder="Enter your Email">
                            <label for="" class="py-2">New Password</label>
                            <input type="text" class="form-control mb-3" placeholder="Enter your New Password">
                            <label for="" class="py-2">Confirm Password</label>
                            <input type="text" class="form-control mb-3" placeholder="Enter your Confirm Password">
                        </div>
                        <div class="mx-auto col-sm-12 mt-3 px-3">
                            <a href="" class="btn btn-info col-sm-12 rounded-2 text-white mt-2 mb-4 py-3 fs-4 text-uppercase">Reset Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
