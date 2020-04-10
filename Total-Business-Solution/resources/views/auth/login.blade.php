@extends('layouts.master-admin')
@section('content')
            <!--start login contant-->
            <div class="app-contant">
                <div class="bg-white">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
                                <div class="d-flex align-items-center h-100-vh">
                                    <div class="login p-50">
                                        <h2 class="mb-2">We Are Admin</h2>
                                        <p><small>Welcome back, please login to your account.</small></p>
                                        <form method="POST" action="{{ route('login') }}" class="mt-3 mt-sm-5">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="email" class="control-label">{{ __('E-Mail Address') }}*</label>
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="password" class="control-label">{{ __('Password') }}*</label>
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-block d-sm-flex  align-items-center">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Remember Me') }}
                                                            </label>
                                                        </div>
                                                        @if (Route::has('password.request'))
                                                            <a class="ml-auto" href="{{ route('password.request') }}">
                                                                Forgot Password ?
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
{{--                                                    <a href="index.html" class="btn btn-primary text-uppercase">Sign In</a>--}}
                                                    <button type="submit" class="btn btn-primary text-uppercase">
                                                        {{ __('Login') }}
                                                    </button>
                                                </div>
                                                <div class="col-12  mt-3">
{{--                                                    <p>Don't have an account ?<a href="auth-register.html"> Sign Up</a></p>--}}
                                                    <p>Don't have an account ?<a href="{{ route('register') }}"> Sign Up</a></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
                                <div class="row align-items-center h-100">
                                    <div class="col-7 mx-auto ">
                                        <img class="img-fluid" src="{{ asset('admin-assets/img/bg/login.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end login contant-->
@endsection
