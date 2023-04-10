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
                <h5>Sign up to continue</h5>
            </div>
            <form class="tu-themeform tu-login-form" method="POST" action="{{ route('register') }}">
                @csrf
                <fieldset>
                    <div class="tu-themeform__wrap">
                        <div class="form-group-wrap">
                            <div class="form-group">
                                <div class="tu-placeholderholder">
                                    <select id="role" class="form-control @error('role') is-invalid @enderror"
                                        name="role" value="{{ old('role') }}" required>
                                        <option value="" disabled selected hidden style="color:#ccc">Select
                                            Role <em>*</em></option>
                                        <option value="2">Tutor</option>
                                        <option value="3">Guardian</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="tu-placeholderholder">
                                    <input type="text" class="form-control" name="name" required=""
                                        placeholder="Full Name">
                                    <div class="tu-placeholder">
                                        <span>Name</span>
                                        <em>*</em>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="tu-placeholderholder">
                                    <input type="tel" class="form-control" required="" name="mobile"
                                        placeholder="Mobile Number">
                                    <div class="tu-placeholder">
                                        <span>Mobile Number</span>
                                        <em>*</em>
                                    </div>
                                </div>
                                @error('mobile')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="tu-placeholderholder">
                                    <input type="email" class="form-control" name="email" required=""
                                        placeholder="Email address">
                                    <div class="tu-placeholder">
                                        <span>Email address</span>
                                        <em>*</em>
                                    </div>
                                </div>
                                @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="tu-placeholderholder">
                                    <input type="password" class="form-control" required="" placeholder="password"
                                        name="password">
                                    <div class="tu-placeholder">
                                        <span>Password</span>
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
                                <div class="tu-placeholderholder">
                                    <input type="password" class="form-control" required="" placeholder="password"
                                        name="password_confirmation">
                                    <div class="tu-placeholder">
                                        <span>Confirm Password</span>
                                        <em>*</em>
                                    </div>
                                </div>
                                @error('password_confirmation')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="tu-primbtn-lg w-100"><span>Join now</span><i
                                        class="icon icon-arrow-right"></i></button>
                            </div>
                            <!-- <div class="form-group">
                                <div class="tu-check tu-signup-check">
                                    <input type="checkbox" id="expcheck2" name="expcheck">
                                    <label for="expcheck2"><span>I have read and agree to all <a
                                                href="javascript:void(0);">Terms &amp; conditions</a></span></label>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <div class="tu-optioanl-or">
                                    <span>OR</span>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin"
                                    target="_blank" class="tu-btn-signup">
                                    <img src="images/google.png" alt="images">
                                    Sign in with Google
                                </a>
                            </div> -->
                            <div class="tu-lost-password form-group">
                                <a href="{{route('login')}}">Login now</a>
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