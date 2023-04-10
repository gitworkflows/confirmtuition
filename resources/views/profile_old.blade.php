@extends('layouts.app')
@section('title','Profile')
@section('content')
<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start row" style="margin-top: 30px;">
            <!-- ////////////////sidenav here -->
            <div class="aiz-user-sidenav-wrap pt-4 position-relative z-1 shadow-sm col-md-3">
                <div class="absolute-top-right d-xl-none">
                    <button class="btn btn-sm p-2" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav"
                        data-same=".mobile-side-nav-thumb">
                        <i class="las la-times la-2x"></i>
                    </button>
                </div>
                <div class="absolute-top-left d-xl-none">
                    <a class="btn btn-sm p-2" href="https://circle.com.bd/logout">
                        <i class="las la-sign-out-alt la-2x"></i>
                    </a>
                </div>
                <div class="aiz-user-sidenav rounded overflow-hidden  c-scrollbar-light">
                    <div class="px-4 text-left mb-4">
                        <span class="avatar avatar-md mb-3">
                            <img src="{{ asset('/public/uploaded/user/'.auth()->user()->avatar) }}"
                                class="image rounded-circle" style="height:70px" />
                        </span>
                        <h4 class="h5 fw-600">{{auth()->user()->name}}
                            <span class="ml-2">
                                <i class="las la-check-circle" style="color:green"></i>
                            </span>
                        </h4>
                    </div>
                    <div class="sidemnenu mb-3">
                        <ul class="aiz-side-nav-list metismenu" data-toggle="aiz-side-menu"
                            style="padding: 0px; list-style: none;">
                            <li class="aiz-side-nav-item" style="padding: 10px 0px;">
                                <a href="{{url('profile')}}" class="aiz-side-nav-link ">
                                    <i class="las la-user aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Profile</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="{{url('applications')}}" class="aiz-side-nav-link ">
                                    <i class="las la-money-bill aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Applications</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="aiz-user-panel col-md-9">
                <div class="aiz-titlebar mt-2 mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <h1 class="h3 m-0 text-left">Profile</h1>
                        </div>
                    </div>
                </div>
                <div id="field_error"></div>
                <form enctype="multipart/form-data" action="{{url('user/update')}}" method="post">
                    @csrf
                    <div class="card">
                        @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Name <span class="text-primary">*</span></label>
                                        <input type="hidden" class="form-control" value="1" placeholder="Enter Name"
                                            name="user_id" required="">
                                        <input type="text" class="form-control" value="{{auth()->user()->name}}"
                                            placeholder="Enter Name" name="name" required="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Role <span class="text-primary">*</span></label>
                                        <select name="role" class="form-control" required>
                                            <option value="2" {{ auth()->user()->role == 2 ? 'selected' : ''}}>Tutor
                                            </option>
                                            <option value="3" {{ auth()->user()->role == 3 ? 'selected' : ''}}>Guardian
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mobile Number <span class="text-primary">*</span></label>
                                        <input type="number" class="form-control" placeholder="Enter Mobile Number"
                                            value="{{auth()->user()->mobile}}" name="mobile" required="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Email Address <span class="text-primary">*</span></label>
                                        <input type="email" class="form-control" value="{{auth()->user()->email}}"
                                            placeholder="Enter Email" name="email" required="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Current Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password"
                                            name="currentPassword">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mew Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password"
                                            name="newPassword">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password"
                                            name="confirmPassword">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="avatar" type="file"
                                            class="form-control @error('avatar') is-invalid @enderror" name="avatar"
                                            value="{{ old('avatar') }}" autocomplete="avatar">

                                        <img src="{{ asset(Auth::user()->avatar) }}"
                                            style="width:80px;margin-top: 10px;">

                                        @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <h3>Personal Info</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Gender <span class="text-primary">*</span></label>
                                        <select name="gender" class="form-control">
                                            <option value="Male"
                                                {{ @$personal_info->gender == 'Male' ? 'selected' : ''}}>Male
                                            </option>
                                            <option value="Female"
                                                {{ @$personal_info->gender == 'Female' ? 'selected' : ''}}>Female
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Additional Number <span class="text-primary">*</span></label>
                                        <input type="number" class="form-control" placeholder="Enter Mobile Number"
                                            value="{{@$personal_info->additional_number}}" name="additional_number">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>ID Card Type <span class="text-primary">*</span></label>
                                        <select name="id_card_type" class="form-control" required>
                                            <option value="NID"
                                                {{ @$personal_info->id_card_type == 'NID' ? 'selected' : ''}}>NID
                                            </option>
                                            <option value="Student"
                                                {{ @$personal_info->id_card_type == 'Student' ? 'selected' : ''}}>
                                                Student
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>ID Card No <span class="text-primary">*</span></label>
                                        <input type="number" class="form-control" placeholder="Enter ID Card No"
                                            value="{{@$personal_info->id_card_no}}" name="id_card_no">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Date of Birth <span class="text-primary">*</span></label>
                                        <input type="date" class="form-control"
                                            value="{{@$personal_info->date_of_birth}}" name="date_of_birth">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Religion <span class="text-primary">*</span></label>
                                        <select name="religion" class="form-control" required>
                                            <option value="Islam"
                                                {{ @$personal_info->religion == 'Islam' ? 'selected' : ''}}>Islam
                                            </option>
                                            <option value="Hindu"
                                                {{ @$personal_info->religion == 'Hindu' ? 'selected' : ''}}>Hindu
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nationality <span class="text-primary">*</span></label>
                                        <select name="nationality" class="form-control" required>
                                            <option value="Bangladeshi"
                                                {{ @$personal_info->nationality == 'Bangladeshi' ? 'selected' : ''}}>
                                                Bangladeshi
                                            </option>
                                            <option value="Indian"
                                                {{ @$personal_info->nationality == 'Indian' ? 'selected' : ''}}>Indian
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Facebook Link <span class="text-primary">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter facebook link"
                                            value="{{@$personal_info->facebook_link}}" name="facebook_link">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Youtube Link <span class="text-primary">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter youtube link"
                                            value="{{@$personal_info->youtube_link}}" name="youtube_link">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Fathers Name <span class="text-primary">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Fathers Name"
                                            value="{{@$personal_info->fathers_name}}" name="fathers_name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Fathers Number <span class="text-primary">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Fathers Number"
                                            value="{{@$personal_info->fathers_number}}" name="fathers_number">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mothers Name <span class="text-primary">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Mothers Name"
                                            value="{{@$personal_info->mothers_name}}" name="mothers_name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mothers Number <span class="text-primary">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Mothers Number"
                                            value="{{@$personal_info->mothers_number}}" name="mothers_number">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Overview <span class="text-primary">*</span></label>
                                        <textarea class="form-control" placeholder="Enter Mothers Number"
                                            name="overview">{{@$personal_info->overview}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 text-right">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                </form>
                <br>
            </div>
        </div>
    </div>
</section>
@endsection