@extends('layouts.app')
@section('title','Profile')
@section('content')
<main class="tu-main tu-bgmain">
    <div class="tu-main-section">
        <div class="container">
            <form class="tu-profilewrapper" action="{{url('change-password')}}" method="post">
                @csrf
                <div class="tu-boxwrapper">
                    <div class="tu-boxarea">
                        <div class="tu-boxsm">
                            <div class="tu-boxsmtitle">
                                <h4>Change Password</h4>
                            </div>
                        </div>
                        <div class="tu-box">
                            @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul class="p-0">
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Current Password <span class="text-danger">*</span> </label>
                                        <input type="password" class="form-control" placeholder="Enter Password"
                                            name="currentPassword" autocomplete="off">
                                        @error('currentPassword')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Mew Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" placeholder="Enter Password"
                                            name="newPassword" autocomplete="off">
                                        @error('newPassword')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Confirm Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" placeholder="Enter Password"
                                            name="confirmPassword" autocomplete="off">
                                        @error('confirmPassword')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tu-btnarea-two">
                    <a href="{{route('profile')}}" class="btn btn-outline-primary mr-2">Back to Profile</a>
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection