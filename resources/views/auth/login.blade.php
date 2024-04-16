{{--<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin-login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>--}}

@include('admin.include.head-link')
<!-- Sign In Start -->
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="" class="">
                        <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin</h3>
                    </a>
                    <h3>Sign In</h3>
                </div>
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                        {{ session('massage')}}
                    </div>
                @endif
                <div class="mb-4 font-medium text-sm text-green-600">

                    {{ session('massage')}}
                </div>
                <form action="{{ route('admin-login') }}" method="post">  {{--it will be 'login'--}}
                    @csrf

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="form-check ">
                                <label for="admin" class=""><input type="radio" class="form-check-input" id="admin" name="user_type" value="1" checked/> <span>Admin</span> </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check ">
                                <label for="teacher" class=""><input type="radio" class="form-check-input" id="teacher" name="user_type" value="2"/> <span>Teacher</span> </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email"
                               placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" name="password"
                               placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <a href="">Forgot Password</a>
                    </div>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                    <p class="text-center mb-0">Don't have an Account? <a href="{{ route('admin-register') }}">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sign In End -->
@include('admin.include.bottom-link')
