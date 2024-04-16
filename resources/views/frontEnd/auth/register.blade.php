@extends('frontEnd.master')
{{--@section('')
    class="active"
@endsection--}}
@section('title', 'Register')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Register page</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Register</li>
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
                    <div class="card card-body shadow">
                        <h3 class="title-color fw-bolder mx-auto mt-3">Register for an eLearning account</h3>
                        <div class="px-3">
                            <hr>
                            <form action="{{ route('register-student') }}" method="post">
                                @csrf
                                <div class="">
                                    <label for="" class="py-2">Name*</label>
                                    <input type="text" class="form-control mb-3" name="name" required placeholder="Enter your name">
                                    <label for="" class="py-2">Email*</label>
                                    <input type="email" class="form-control mb-3" name="email" required placeholder="Enter your Email">
                                    <label for="" class="py-2">Mobile*</label>
                                    <input type="number" class="form-control mb-3" name="mobile" required placeholder="Enter your Mobile">
                                    <label for="" class="py-2">Address*</label>
                                    <textarea name="address" class="form-control mb-2" id="" cols="30" rows="3" required placeholder="House/P.O./District/Division/Country."></textarea>
                                    <label for="" class="py-2">Birth Certificate No*</label>
                                    <input type="number" class="form-control mb-2" name="birth_certificate" required placeholder="Enter Birth Certificate No">
                                    <label for="" class="py-2">Date of Birth*</label>
                                    <input type="date" class="form-control mb-2" name="date_of_birth" required>
                                    <label for="" class="py-2">Password*</label>
                                    <input type="password" class="form-control mb-2" name="password" required placeholder="Enter your Password">

                                    <div class="text-start mt-2 py-3">
                                        <label for="" class="me-auto mt-2 title-color"><input type="checkbox"> I agree with the
                                            <a href="">Terms Of Service.</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="mx-auto col-sm-12">
                                    <button type="submit"  class="btn btn-primary col-sm-12 rounded-2 text-white mt-2 mb-4 pt-3 fs-4 text-uppercase">Register Now</button>

                                </div>
                            </form>
                            <hr>
                            <div class="col-md-12 text-center">
                                <label for="" class="me-auto"> Already have an Account?</label>
                                <a href="{{ route('user-login') }}" class="acc-btn link-underline-light">Login now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
