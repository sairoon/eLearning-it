@extends('frontEnd.master')
{{--@section('')
    class="active"
@endsection--}}
@section('title', 'Login')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Login page</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                            {{--                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>--}}
                            <li class="breadcrumb-item text-white active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <section class="py-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body shadow border-0">
                        <h3 class="title-color fw-bolder mx-auto mt-3">Login to your eLearning account</h3>
                        <hr>
                        <form action="{{ route('user-login') }}" method="post">
                            @csrf
                            <div class=" px-3">
                                <label for="" class="py-2">Email</label>
                                <input type="email" class="form-control mb-3" name="email" placeholder="Enter your Email">
                                <label for="" class="py-2">Password</label>
                                <input type="text" class="form-control" name="password" placeholder="Enter your Password">
                                <div class="text-end mt-3 py-3 px-3">
                                    {{--                                <label for="" class="me-auto mt-2 title-color"><input type="checkbox"> Remember Me.</label>--}}
                                    <a href="" class="ms-auto link-underline-light fs-5" data-bs-target="#modalToggle" data-bs-toggle="modal">Forgot Your Password?</a>

                                </div>
                            </div>
                            <div class="mx-auto col-sm-12 px-3">
{{--                                <a href="" class="btn btn-info col-sm-12 rounded-2 text-white mt-2 mb-4 py-3 fs-4 text-uppercase">Login</a>--}}
                                <button  class="btn btn-primary col-sm-12 rounded-2 text-white mt-2 mb-4 py-3 fs-4 text-uppercase" type="submit">Login</button>
                            </div>
                        </form>
                        <hr>
                        <div class="col-md-12 text-center">
                            <label for="" class="me-auto"> Don't have an Account?</label>
                            <a href="{{ route('user-register') }}" class="acc-btn link-underline-light">Create Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
