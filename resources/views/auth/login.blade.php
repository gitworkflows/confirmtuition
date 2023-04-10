@extends('layouts.app')

@section('content')
<main>
    <div class="tu-main-login container">
        <!-- <div class="tu-login-left">
            <figure>
                <img src="{{asset('public/frontend/asset/images/login/img-01.png')}}" alt="images">
            </figure>
            <div class="tu-login-left_title">
                <h2>Yes! we’re making progress</h2>
                <span>every minute & every second</span>
            </div>
        </div> -->
        <div class="tu-login-right">
            <div class="tu-login-right_title">
                <h2>Welcome back!</h2>
                <h5>Login to continue</h5>
            </div>
            <form class="tu-themeform tu-login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <fieldset>
                    <div class="tu-themeform__wrap">
                        <div class="form-group-wrap">
                            <div class="form-group">
                                <div class="tu-placeholderholder">
                                    <input id="username" type="text"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Enter Your Email Address / Mobile Number" name="username"
                                        value="{{ old('email') }}" required autocomplete="off" autofocus>
                                    <div class="tu-placeholder">
                                        <span>Email address / Mobile number</span>
                                        <em>*</em>
                                    </div>

                                </div>
                                @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                @error('mobile')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="tu-placeholderholder">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Enter Your Password" name="password" required
                                        autocomplete="current-password">
                                    <div class="tu-placeholder">
                                        <span>Your password</span>
                                        <em>*</em>
                                    </div>
                                </div>
                                @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="tu-primbtn-lg w-100"><span>Login now</span><i
                                        class="icon icon-arrow-right"></i></button>
                            </div>
                            <div class="form-group">
                                <div class="tu-optioanl-or">
                                    <span>OR</span>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin"
                                    target="_blank" class="tu-btn-signup">
                                    <img src="{{asset('public/frontend/asset/images/google.png')}}" alt="images">
                                    Sign in with Google
                                </a>
                            </div> -->
                            <div class="tu-lost-password form-group">
                                <a href="{{route('register')}}">Sign Up</a>
                                <a href="lost-password.html" class="tu-password-clr_light">Lost password?</a>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</main>
@endsection