@include('teacher.include.head-link')


<!-- Sidebar Start -->
@include('teacher.include.sidebar')
<!-- Sidebar End -->


<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    @include('teacher.include.header')
    <!-- Navbar End -->

    {{--        content area start--}}
    @yield('content')
    {{--        content area end--}}

    <!-- Footer Start -->
    @include('teacher.include.footer')
    <!-- Footer End -->
</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

@include('teacher.include.bottom-link')
